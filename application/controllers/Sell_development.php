<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sell_development extends Vendor_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('Sell_development_model', 'this_model');
        $this->load->model($this->myvalues->checkoutFrontEnd['model'], 'front_checkout_model');
    }

    public function index()
    {
        $data['register_result'] = $this->this_model->getRegister();
        // dd($data['register_result']);
        // $data['cust_row'] =  $this->this_model->customer();
        // $data['category'] =  $this->this_model->getCategory();
        // error_reporting(E_ALL);
        // ini_set('display_errors', '1');
        $data['IsPosMostLike'] = $this->this_model->getProductVarient(['IsPosMostLike' => '1']);
        $data['currency_code'] = $this->this_model->getCurrencyCode();
        $currency = $this->this_model->getCurrency();
        $data['js'] = array('pos.js');
        $data['css'] = ['sell_style.css'];
        $data['currency'] = $currency[0]->value;

        //dk
        $this->load->model('api_v3/common_model', 'co_model');
        $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));
        if (isset($_GET['parkedId']) && !empty($_GET['parkedId'])) {
            $data['var'] = "park";
            $parked_order_id = base64_decode($_GET['parkedId']);
            $data['order_temp_result'] = $this->this_model->OrderTemp($parked_order_id);

            $data['parked_order_id'] = base64_decode($_GET['parkedId']);
        } else {
            $data['order_temp_result'] = $this->this_model->OrderTempWithoutPark();
        }

        $data['isShow'] = false;
        //dk
        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
            $data['isShow'] = true;
        }

        $data['order_row'] = $this->this_model->getParkedOrderList();
        foreach ($data['order_row'] as $key => $val) :
            if ($val->customer_id != '0') {
                $data['order_row'][$key]->customerData = $this->this_model->getCustomerDetails($val->customer_id);
            }
        endforeach;
        // dd($data['order_row']);//

        // for shopping based discount Dipesh
        // $discountValue = 0;
        // $discountPercentage = 0;
        $sub_total = 0;
        $gst = 0;
        $total_savings = 0; //test Dipesh
        foreach ($data['order_temp_result'] as $key => $value) :
            // dd($value->discount_price);
            $gst_amount = (numberFormat($value->discount_price) * $value->gst) / 100;
            $total_savings += ($value->actual_price - numberFormat($value->discount_price)) * $value->quantity;
            $gst += numberFormat($gst_amount) * numberFormat($value->quantity);

            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $data['order_temp_result'][$key]->price = $value->without_gst_price * $value->quantity;
            } else {
                $data['order_temp_result'][$key]->price = numberFormat($value->discount_price) * $value->quantity;
            }
            $sub_total += $data['order_temp_result'][$key]->price;
        endforeach;

        $data['subtotal'] = $sub_total;
        // $shoppingDiscount = $this->this_model->checkShoppingBasedDiscount($sub_total);

        // if (!empty($shoppingDiscount)) {
        //     if ($sub_total >= $shoppingDiscount[0]->cart_amount) {
        //         $discountPercentage = $shoppingDiscount[0]->discount_percentage;
        //         $discountValue = $sub_total * $discountPercentage / 100;
        //         $discountValue = number_format((float)$discountValue, 2, '.', '');
        //     }
        // }

        $arr = $this->calculate_cartBased($sub_total);

        $data['shopping_based_discountPercentage'] = $arr['shopping_based_discountPercentage'];
        $data['shopping_based_discount'] = $arr['shopping_based_discount'];

        $data['total_gst'] = $gst;
        // dd(numberFormat($gst));

        $data['total_savings'] = numberFormat($total_savings);
        if ($data['shopping_based_discount'] > 0) {
            $data['subtotal'] = $sub_total - $data['shopping_based_discount'];
        }

        // dd($data);

        $this->load->view('checkout_new', $data);
        // $this->load->view('checkout', $data); //change the new main view
    }

    // Dk
    public function getShoppingAmountBasedDiscount()
    {
        $price = $this->input->get("price");

        // $shoppingDiscount = $this->this_model->checkShoppingBasedDiscount($price);

        // $discountPercentage = 0;
        // $discountValue = 0;

        // if (!empty($shoppingDiscount)) {
        //     if ($price >= $shoppingDiscount[0]->cart_amount) {
        //         $discountPercentage = $shoppingDiscount[0]->discount_percentage;
        //         $discountValue = $price * $discountPercentage / 100;


        //         $discountValue = number_format((float)$discountValue, 2, '.', '');
        //     }
        // }
        $arr = $this->calculate_cartBased($price);

        $data['shopping_based_discountPercentage'] = $arr['shopping_based_discountPercentage'];
        $data['shopping_based_discount'] = $arr['shopping_based_discount'];

        echo json_encode($data);
    }

    function calculate_cartBased($price)
    {

        $shoppingDiscount = $this->this_model->checkShoppingBasedDiscount($price);

        $discountPercentage = 0;
        $discountValue = 0;

        if (!empty($shoppingDiscount)) {
            if ($price >= $shoppingDiscount[0]->cart_amount) {
                $discountPercentage = $shoppingDiscount[0]->discount_percentage;
                $discountValue = $price * $discountPercentage / 100;


                $discountValue = number_format((float)$discountValue, 2, '.', '');
            }
        }
        $val['shopping_based_discountPercentage'] = $discountPercentage;
        $val['shopping_based_discount'] = $discountValue;
        return $val;
    }
    // 


    // added for promocode

    function validate_promocode()
    {
        $response = $this->this_model->validate_promocode($this->input->post());
        echo json_encode($response);
        die;
    }
    // 
    public function findProductBykey()
    {

        $this->load->model('api_v3/common_model', 'co_model');
        $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

        $currency = $this->this_model->getCurrency();
        $cur = $currency[0]->value;
        if ($this->input->post()) {
            $class = 'add_product';
            if (isset($_POST['from'])) {
                $class = 'quick';
            }
            $res = $this->this_model->findProductBykey($this->input->post());
            // dd($res);die;
            $html = '<ul>';
            foreach ($res as $key => $value) {
                $price = number_format((float)$value->discount_price, '2', '.', '');

                if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                    $discount_amt = $value->discount_price * $value->gst / 100;
                    $price = $value->discount_price - $discount_amt;
                }

                $html .= '<li class="popover-list-item ' . $class . '" data-product_id=' . $value->product_id . ' data-pw_id=' . $value->pw_id . ' >
                        <div class="product-list-wrapper">
                            <div>
                                <div>
                                    <h5>' . $value->name . '</h5>
                                    <h5>' . $value->weight_no . ' ' . $value->weight_name . '</h5>
                                </div>
                                <div class="total-wrapper">
                                    <h5>'  . $cur . ' ' . numberFormat($price) . '</h5>
                                </div>
                            </div>
                        </div>
                </li>';
            }
            $html .= '</ul>';

            echo json_encode(['res' => $html]);
        }
    }

    // Dipesh Added for Refund
    public function return_sell()
    {
        $data['currency_code'] = $this->this_model->getCurrencyCode();
        $data['js'] = array('return_pos.js');
        $data['css'] = ['sell_style.css'];
        $currency = $this->this_model->getCurrency();
        $data['currency'] = $currency[0]->value;
        // 

        $this->load->model('api_v3/common_model', 'co_model');
        $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
            $data['isShow'] = true;
        } else {
            $data['isShow'] = false;
        }

        $this->load->view("return_sell", $data);
    }
    // Dipesh Added for Get Order 
    public function findOrderByKey()
    {
        if ($this->input->post()) {
            $class = 'add_order';
            $currency = $this->input->post("currency");

            $res = $this->this_model->findOrderByKey($this->input->post());
            // dd($res);die;
            // foreach ($res as $val) :
            //     $result = $this->this_model->getOrderDetailsList($val->id);
            // endforeach;

            $html = '<ul>';
            foreach ($res as $key => $value) {
                // $value->discount_price = number_format((float)$value->discount_price, '2', '.', '');
                $html .= '<li class="popover-list-item ' . $class . '" data-order_id=' . $value->id . ' . data-customer_id=' . $value->customer_id . '  >
                    <div class="product-list-wrapper">
                        <div>
                            <div>
                                <h5>' . $value->order_no . '</h5>
                                <h5>' . date('d/m/Y h:i A', $value->dt_updated) . '</h5>
                            </div>
                            <div class="total-wrapper">
                             <h5>' . $currency . ' ' . numberFormat($value->payable_amount) . '</h5>
                            </div>
                        </div>
                    </div>
                </li>';
            }
        }
        $html .= '</ul>';

        echo json_encode(['res' => $html]);
    }
    // Dipesh Added for adding sold Products
    public function showAllSoldProducts()
    {
        if ($this->input->post()) {
            $order_id = $this->input->post('order_id');
            $customer_id = $this->input->post('customer_id');
            $res = $this->this_model->showAllSoldProducts($order_id);

            $customerHtml = '';
            if ($customer_id != '0' && !empty($customer_id)) {
                $data['customerData'] = $this->this_model->getCustomerDetails($customer_id);
                $customerHtml .= $this->load->view("pos/customer_data", $data, true);
                unset($data);
            }

            $html = '';
            $data['products'] = $res['order_details'];

            $promocode_used = "0";
            $cart_based = "0";

            if ($data['products'][0]->promocode_used !== '0') {
                $promocode_used = $this->this_model->getPromocodeAmount($data['products'][0]->order_id);
            }

            if ($data['products'][0]->cart_based !== '0') {
                $total_sub = 0;
                foreach ($data['products'] as $val) :
                    $total_sub +=  $val->without_gst_price * $val->quantity;
                endforeach;

                // $cart_based = $data['products'][0]->cart_based;
                $cart_based = ($data['products'][0]->cart_based * 100) / $total_sub;
            }

            $cart_html = '';

            // 
            $this->load->model('api_v3/common_model', 'co_model');
            $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $data['isShow'] = true;
            } else {
                $data['isShow'] = false;
            }

            foreach ($data['products'] as $key => $value) :
                $returned_quantity = $this->this_model->getReturnedQuantity($value->order_details_id);

                $other_dis = 0;
                if ($cart_based > 0) {
                    $other_dis = $cart_based;
                } else if (isset($promocode_used->percentage) && $promocode_used->percentage > 0) {
                    $other_dis = $promocode_used->percentage;
                }

                if ($returned_quantity != 0) {
                    $abc['value'] = $value;

                    // dd($abc);
                    $abc['value'] = $value;

                    $abc['value']->returned_quantity = $returned_quantity;
                    $abc['value']->price = $data['isShow'] ? numberFormat($abc['value']->quantity * $abc['value']->without_gst_price) : numberFormat($abc['value']->quantity * $abc['value']->discount_price);
                    $abc['value']->noDelete = true;

                    if ($other_dis > 0) {
                        $valNew =  $abc['value']->discount_price - ($abc['value']->discount_price * $other_dis) / 100;
                        $abc['value']->single_gst_discounted_amount = $valNew * $abc['value']->gst / 100;
                    } else {
                        $abc['value']->single_gst_discounted_amount = 0;
                    }
                    // else {
                    $abc['value']->single_gst_amount = ($abc['value']->discount_price * $abc['value']->gst) / 100;
                    // }



                    $abc['value']->gst_amount = numberFormat($abc['value']->single_gst_amount) * $abc['value']->returned_quantity;

                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                        $abc['isShow'] = true;
                    } else {
                        $abc['isShow'] = false;
                    }

                    $currency = $this->this_model->getCurrency();
                    $abc['currency'] = $currency[0]->value;

                    $cart_html .=  $this->load->view("pos/cart_item_refund", $abc, true);
                    unset($data['products'][$key]);
                }
            endforeach;

            $data['order_id'] = $order_id;

            $html .=  $this->load->view("pos/quick_product", $data, true);

            echo json_encode(['result' => $html, 'customer_html' => $customerHtml, 'cart_html' => $cart_html, 'promocode_used' => $promocode_used, 'cart_based' => $cart_based, 'sub_total' => $data['products'][0]->sub_total]);
        }
    }
    // Dipesh for add product 
    public function addSoldProductToCart()
    {
        if ($this->input->post()) {
            $postdata = $this->input->post();
            $data['value'] = (object)[];

            $data['value']->product_id = $postdata["product_id"];
            $data['value']->order_id = $postdata["order_id"];
            $data['value']->product_weight_id = $postdata["product_weight_id"];
            $data['value']->product_name = $postdata["product_name"];
            $data['value']->weight_no = $postdata["weight_no"];
            $data['value']->weight_name = $postdata["weight_name"];
            $data['value']->quantity = $postdata["quantity"];
            $data['value']->discount_price = $postdata["discount_price"];
            $data['value']->discount = $postdata["discount"];
            $data['value']->actual_price = $postdata["actual_price"];
            $data['value']->order_details_id = $postdata["order_details_id"];
            // $data['value']->price = $postdata["price"];
            $data['value']->weight_id = $postdata["weight_id"];
            // 
            $data['value']->without_gst_price = $postdata["without_gst_price"];
            $data['value']->gst = $postdata["gst"];

            $data['value']->returned_quantity = $this->this_model->getReturnedQuantity($postdata["order_details_id"]);

            $html = '';

            $currency = $this->this_model->getCurrency();
            $data['currency'] = $currency[0]->value;
            $data['js'] = array('return_pos.js');
            $data['css'] = ['sell_style.css'];

            $this->load->model('api_v3/common_model', 'co_model');
            $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

            $data['isShow'] = false;
            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $data['isShow'] = true;
                $data['value']->price = numberFormat($data['value']->without_gst_price * $data['value']->quantity);
            } else {
                $data['value']->price = numberFormat($data['value']->discount_price * $data['value']->quantity);
            }

            $data['value']->single_gst_amount = ($data['value']->discount_price * $data['value']->gst) / 100;

            $data['value']->gst_amount = numberFormat($data['value']->single_gst_amount) * $data['value']->quantity;

            if (count($data['value']) > 0) {
                $html .=  $this->load->view("pos/cart_item_refund", $data, true);
                echo json_encode(['status' => 1, 'result' => $html]);
            }
        }
    }
    // remove 
    public function removeSoldProductFromCart()
    {
        if ($this->input->post()) {
            $postdata = $this->input->post();
            $data['value'] = (object)[];

            $data['value']->product_id = $postdata["product_id"];
            $data['value']->order_id = $postdata["order_id"];
            $data['value']->product_weight_id = $postdata["product_weight_id"];
            $data['value']->product_name = $postdata["product_name"];
            $data['value']->weight_no = $postdata["weight_no"];
            $data['value']->weight_name = $postdata["weight_name"];
            $data['value']->quantity = $postdata["quantity"];
            $data['value']->discount_price = $postdata["discount_price"];
            $data['value']->discount = $postdata["discount"];
            $data['value']->actual_price = $postdata["actual_price"];
            $data['value']->order_details_id = $postdata["order_details_id"];
            // $data['value']->price = $postdata["price"];
            $data['value']->weight_id = $postdata["weight_id"];
            // 
            $data['value']->without_gst_price = $postdata["without_gst_price"];
            $data['value']->gst = $postdata["gst"];

            $this->load->model('api_v3/common_model', 'co_model');
            $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

            $data['isShow'] = false;
            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $data['isShow'] = true;
                $data['value']->price = numberFormat($data['value']->without_gst_price * $data['value']->quantity);
            } else {
                $data['value']->price = numberFormat($data['value']->discount_price * $data['value']->quantity);
            }

            $data['products'] = [$data['value']];
            $html =  $this->load->view("pos/quick_product", $data, true);
            echo json_encode(['result' => $html, 'status' => 1]);
        }
    }
    // 
    // Refund for submit
    public function order_refund_checkout()
    {
        if (count($this->input->post('product_name')) > 0) {
            $res = $this->this_model->order_refund_checkout($this->input->post()); //DK
        }
        redirect(base_url() . '	sell_development/return_sell');
    }
    // Done


    public function addProducttoTempOrder()
    {
        if ($this->input->post()) {
            $parked_id = (isset($_POST['isParked']) && !empty($_POST['isParked'])) ?  $this->input->post('isParked') : '0';
            if (isset($_POST['isParked']) && !empty($_POST['isParked'])) {
                $res =  $this->this_model->addProducttoParkedOrder($this->input->post());
                $parked_id = $this->input->post('isParked');
                $result = $this->this_model->OrderTemp($parked_id);
            } else {
                $res = $this->this_model->addProducttoTempOrder($this->input->post());
                $result = $this->this_model->OrderTempWithoutPark();
            }

            if ($res == 0) {
                echo json_encode(['status' => $res]);
            } else {
                $html = '';
                $sub_total = 0;
                $total_discount = 0;
                $total_gst = 0;
                $total_savings = 0;

                $currency = $this->this_model->getCurrency();

                $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

                foreach ($result as $key => $value) {
                    $gst_amount = ($value->discount_price * $value->gst) / 100;
                    $total_gst += numberFormat($gst_amount) * $value->quantity;
                    $data['value'] = $value;

                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                        $data['value']->price = $value->without_gst_price * $value->quantity;
                        $data['isShow'] = true;
                    } else {
                        $data['value']->price = $value->discount_price * $value->quantity;
                        $data['isShow'] = false;
                    }

                    $sub_total += $data['value']->price;

                    $total_savings += ($value->actual_price - $value->discount_price) * $value->quantity;
                    $total_discount += $value->discount_per_product;

                    $dis = ($value->discount != 0) ? $value->discount : "0 %";

                    $data['parked_order_id'] = $this->input->post('isParked');
                    $data['currency'] = $currency[0]->value;

                    $html .= $this->load->view('cart_item_ajax', $data, true);
                }

                echo json_encode([
                    'status' => 1, 'result' => $html, 'subtotal' => numberFormat($sub_total),
                    'total_gst' => $this->numberFormat($total_gst),
                    'total_savings' => numberFormat($total_savings),
                    'count' => count($result)
                ]);
            }
        }
    }

    public function numberFormat($number)
    {
        $number = number_format((float)$number, 2, '.', '');
        return $number;
    }

    public function searchCustomber()
    {
        if ($this->input->post()) {
            $res = $this->this_model->searchCustomber($this->input->post());
            // print_r($res);die;
            $html = '';

            foreach ($res as $key => $value) {
                $html .= '<ul>
            <li class="popover-list-item select_customer" data-customer_id=' . $value->id . '>
                <a href="#">
                    <div class="customer-wrap">
                        <div class="profile-avatar">
                            ' . ucfirst($value->customer_name[0]) . '
                        </div>
                        <div class="list-items">
                            <h4>' . $value->customer_name . '</h4>
                            <p>' . $value->customercode . '</p>
                        </div>
                    </div>
                </a>
                </li>
            </ul>';
            }
            $html .= '<a href="#" type="button" class="btn" id="btn_add_cust" data-toggle="modal" data-target="#add_cust">
            <p><i class="fa fa-plus-circle" aria-hidden="true"></i> Add "<span></span>" as a customer</p>
            </a>';
            echo json_encode(['result' => $html]);
        }
    }

    public function searchforAdd()
    {
        if ($this->input->post()) {
            $res = $this->this_model->searchCustomber($this->input->post());
            // print_r($res);die;
            $html = '';
            foreach ($res as $key => $value) {
                $html .= '<ul>
            <li class="popover-list-item select_customer" data-customer_id=' . $value->id . '>
            <a href="#">
                <div class="customer-wrap">
                    <div class="profile-avatar">
                        ' . $value->customer_name[0] . '
                    </div>
                    <div class="list-items">
                        <h4>' . $value->customer_name . '</h4>
                        <p>' . $value->customercode . '</p>
                    </div>
                </div>
                <div class="remove-close" style="display:none">
                    <span><i class="fa fa-times" aria-hidden="true"></i></span>
                </div>
            </a>
                </li>
            </ul>';
            }
            echo json_encode(['result' => $html]);
        }
    }


    public function removeRecord()
    {
        if ($this->input->post()) {
            if ($this->input->post('isParked') > 0) {
                $res = $this->this_model->removeParked($this->input->post());
            } else {
                $res = $this->this_model->remove($this->input->post());
            }

            if ($res) {
                $status = 1;
                $result = $this->this_model->OrderTempWithoutPark();
                $sub_total = 0;
                $total_discount = 0;
                $total_gst = 0;
                $total_savings = 0;

                foreach ($result as $key => $value) {
                    $gst_amount = ($value->discount_price * $value->gst) / 100;
                    $total_gst += numberFormat($gst_amount) * $value->quantity;
                    $total_savings += ($value->actual_price - $value->discount_price) * $value->quantity;
                    $sub_total += $value->price;
                    $total_discount += $value->discount_per_product;
                }
            } else {
                $status = 0;
            }

            echo json_encode([
                'status' => $status, 'subtotal' => $this->numberFormat($sub_total),
                'total_discount' => $this->numberFormat($total_discount),
                'total_gst' => $this->numberFormat($total_gst),
                'total_savings' => numberFormat($total_savings),
                'count' => count($result)
            ]);
        }
    }


    public function add_quantity()
    {
        if ($this->input->post()) {
            $variant_id = $this->input->post('product_weight_id');
            $demand_quantity = $this->input->post('qunt');
            $avail_quantity = $this->this_model->checkProductVarient($variant_id);
            $isParked = $this->input->post('isParked');
            $temp_id = $this->input->post('temp_id');

            $this->load->model('api_v3/common_model', 'co_model');
            $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

            $discount_percentage = $this->input->post('discount');
            if ($isParked > 0) {

                if ($avail_quantity[0]->quantity >= $demand_quantity) {

                    $price = $avail_quantity[0]->discount_price;

                    // dk
                    // if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                    //     $price = number_format((float)$avail_quantity[0]->without_gst_price, 2, '.', '');
                    // }

                    // new for Discount
                    if ($discount_percentage > 0) {
                        $disc_price = ($avail_quantity[0]->price * $discount_percentage) / 100;
                        $price =  $avail_quantity[0]->price - $disc_price;
                    }

                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                        // $gst_per = ($price * $avail_quantity[0]->gst) / 100;
                        // $price = $price - $gst_per;
                        $price = $price - ($price * $avail_quantity[0]->gst) / 100;
                    }

                    $this->this_model->updateParkedQuantity($this->input->post(), $price);
                    $result = $this->this_model->OrderTemp($isParked);
                } else {
                    $status = '0';
                }
                // $status = '1';
            } else {

                // Check Product quantity Dipesh
                if ($avail_quantity[0]->quantity >= $demand_quantity) {

                    $price =  $avail_quantity[0]->discount_price;

                    // // dk
                    // if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                    //     $price = number_format((float)$avail_quantity[0]->without_gst_price, 2, '.', '');
                    // }


                    // new for Discount
                    if ($discount_percentage > 0) {
                        $disc_price = ($avail_quantity[0]->price * $discount_percentage) / 100;
                        $price =  $avail_quantity[0]->price - $disc_price;
                    }


                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                        $price = $price - ($price * $avail_quantity[0]->gst) / 100;
                        // $price = $avail_quantity[0]->price;
                    }

                    $this->this_model->updateTempQuantity($this->input->post(), $price);
                    $status = '1';
                    $result = $this->this_model->OrderTempWithoutPark();
                } else {
                    $status = '0';
                }
                // }
            }

            $sub_total = 0;
            $total_gst = 0;
            $total_savings = 0;
            foreach ($result as $key => $value) {
                $price = $value->price;

                $r = $this->this_model->checkProductVarient($value->product_weight_id);
                $gst_amount = ($value->discount_price * $r[0]->gst) / 100;
                $total_gst += numberFormat($gst_amount) * $value->quantity;
                $total_savings += ($value->actual_price - $value->discount_price) * $value->quantity;
                $sub_total += $price;
            }

            if ($isParked > 0) {
                $resultIdWish = $this->this_model->getUpdatedParkedRow($temp_id);
            } else {
                $resultIdWish = $this->this_model->OrderTempWithoutPark($temp_id);
            }

            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $resultIdWish[0]->price = numberFormat($resultIdWish[0]->without_gst_price * $resultIdWish[0]->quantity);
            } else {
                $resultIdWish[0]->price = numberFormat($resultIdWish[0]->discount_price * $resultIdWish[0]->quantity);
            }


            echo json_encode([
                'status' => $status, 'subtotal' => $this->numberFormat($sub_total),
                'total_gst' => $this->numberFormat($total_gst),
                'exist_quantity' => $resultIdWish[0]->quantity,
                'exist_price' => $resultIdWish[0]->price,
                'total_savings' => numberFormat($total_savings)
            ]);
        }
    }

    public function update_quantity()
    {
        $this->load->model('api_v3/common_model', 'co_model');
        $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));

        $isParked = $this->input->post('isParked');
        $product_weight_id = $this->input->post("product_weight_id");

        if ($this->input->post()) {
            $res = $this->this_model->updateDiscount($this->input->post(), $isShow);

            $sub_total = 0;
            $total_gst = 0;
            $total_savings = 0;

            $parked_id = (isset($_POST['isParked']) && !empty($_POST['isParked'])) ? $this->input->post('isParked') : '0';
            if (isset($_POST['isParked']) && !empty($_POST['isParked'])) {
                $parked_id = $this->input->post('isParked');
                $result = $this->this_model->OrderTemp($parked_id);
            } else {
                $result = $this->this_model->OrderTempWithoutPark();
            }

            foreach ($result as $key => $value) {
                // start
                if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                    $value->price = numberFormat($value->without_gst_price * $value->quantity);
                } else {
                    $value->price = numberFormat($value->discount_price * $value->quantity);
                }

                // check
                // $price = $value->price;

                $r = $this->this_model->checkProductVarient($value->product_weight_id);

                if ($value->product_weight_id == $product_weight_id) {
                    $gst_amount = $res['gst'];
                    $actual = '';
                    if ($res['discount_per'] > 0) {
                        $actual = '<h5>(' . $currency[0]->value . ' ' . '
                    <s>' . numberFormat($value->actual_price) . '</s> )
                    </h5>';
                    }
                } else {
                    $gst_amount = ($value->discount_price * $r[0]->gst) / 100;
                }

                $total_gst += numberFormat($gst_amount) * $value->quantity;

                $total_savings += ($value->actual_price - $value->discount_price) * $value->quantity;
                $sub_total += $value->price;
            }

            // dd($result);


            $currency = $this->this_model->getCurrency();

            // $actual = '';
            // if ($res['discount_per'] > 0) {
            //     $actual = '<h5>(' . $currency[0]->value . ' ' . '
            //     <s>' . numberFormat($value->actual_price) . '</s> )
            //     </h5>';
            // }
            // dd($result[0]->discount_price);
            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $exist  = $res['without_gst_price'];
            } else {
                $exist = $res['discount_price'];
            }

            echo json_encode([
                'status' => 1, 'subtotal' => $this->numberFormat($sub_total),
                'total_gst' => $this->numberFormat($total_gst),
                'exist_price' => $exist,
                'discount' =>  $res['discount_per'],
                'actual_price' => $actual,
                'exist_total' => $res['sub_total'],
                'total_savings' => numberFormat($total_savings)
            ]);

            // echo json_encode(['status' => '1', 'updated_price' => $res]);//old
        }
    }

    public function quickList()
    {
        if ($this->input->post()) {
            $res = $this->this_model->getProductVarient($this->input->post());
            $html .= '<div class="category-list product_quick_list" data-product_weight_id=' . $res[0]->id . '>
            <a href="javascript:">
                <div>
                    <h4>' . $res[0]->name . '</h4>
                    <p>' . $res[0]->weight_no . ' ' . $res[0]->weight_name . '</p>
                </div>
                </a>
            </div>';
            echo json_encode(['list' => $html]);
        }
    }

    public function MakeQuickList()
    {
        if ($this->input->post()) {
            $this->this_model->MakeQuickList($this->input->post('varientList'));
        }
    }

    public function RemoveQuickListItem()
    {
        if ($this->input->post()) {
            $result = $this->this_model->RemoveQuickListItem($this->input->post());
            if ($result) {
                echo json_encode(['status' => '1']);
            }
        }
    }


    public function history()
    {
        $data['register_result'] = $this->this_model->getRegister(); //changed Dipesh
        $data['order_row'] = $this->this_model->orderHistory();
        // dd($data['order_row']);
        $data['js'] = array('order_history.js');
        $this->load->view('sales_history', $data);
    }

    public function getSalesHistory()
    {
        if ($this->input->post()) {
            echo getSalesHistory($_POST);
        }
    }

    public function viewOrderDetails()
    {
        if ($this->input->post()) {
            $re = $this->this_model->viewOrderDetails($this->input->post());

            $this->load->model('api_v3/common_model', 'co_model');
            $isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('branch_vendor_id'));
            $data['isShow'] = false;
            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $data['isShow'] = true;
            }

            $currency = $this->this_model->getCurrency();
            $data['currency'] = $currency[0]->value;

            $data['order_total_gst'] = 0;
            // added before

            $data['orderInfo'] = $re['orderInfo'][0];
            // dd($data['orderInfo']);
            $data['order_details'] =  $re['order_details'];

            $data['amount'] = $this->this_model->getPromocodeAmount($data['orderInfo']->order_id);
            // dd($data['orderInfo']->total);

            $data['shoppingDiscount'] = $data['orderInfo']->shopping_amount_based_discount * 100  / $data['orderInfo']->total;


            $order_details_Html = $this->load->view('pos/sale_details', $data, true);

            // dd($re['return_orderInfo'][0]);
            if ($re['return_orderInfo'][0]->payable_amount != NULL) {
                unset($data);
                // for refund new
                $data['return_details'] = true;
                $data['isShow'] = false;
                if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                    $data['isShow'] = true;
                }

                $currency = $this->this_model->getCurrency();
                $data['currency'] = $currency[0]->value;

                $data['order_total_gst'] = 0;

                $data['order_details'] = $re['return_order_details'];
                $data['orderInfo'] = $re['return_orderInfo'][0];

                $data['removedDiscountPercentage'] = $re['return_orderInfo'][0]->return_discount_per;
                $data['removedDiscountAmount'] = numberFormat($re['return_orderInfo'][0]->return_discount_amount);

                // dd($data['removedDiscountAmount']);
                $returnOrder_details_Html = $this->load->view('pos/sale_details', $data, true);
            }

            // dd($o_detail);
            // die;
            // for refund later

            // $ro_detail = "";
            // if (count($re['return_order_details']) > 0) {
            //     unset($data);
            //     $data['order_details'] = $re['return_order_details'];
            //     $ro_detail = $this->load->view('pos/pos_order_info', $data, true);
            // }

            // end

            // $data['amount'] = $this->this_model->getPromocodeAmount($data['orderInfo']->order_id);

            // // $data['shoppingDiscount'] =  $this->this_model->checkShoppingBasedDiscount($data['orderInfo']->total);
            // $data['shoppingDiscount'] = $data['orderInfo']->shopping_amount_based_discount * 100  / $data['orderInfo']->total;

            // $o_info .= $this->load->view('pos/pos_order_details', $data, true);

            // $ro_info = "";
            // if (count($re['return_orderInfo']) > 0) {
            //     unset($data);
            //     $data['orderInfo'] = $re['return_orderInfo'][0];

            //     $data['removedDiscountPercentage'] = $data['orderInfo']->return_discount_per;
            //     $data['removedDiscountAmount'] = $data['orderInfo']->return_discount_amount;

            //     $ro_info .=  $this->load->view('pos/pos_order_details', $data, true);
            // }

            // removed for test purpose
            // if ($re['orderInfo'][0]->promocode_used == 1) {
            //     $amount = $this->this_model->getPromocodeAmount($re['orderInfo'][0]->order_id);
            //     $html = '<li>
            //     <div>
            //         <h6>Promocode Discount(%)</h6>
            //         <h6> - ' . '(' . $amount->percentage . '%)' . numberFormat($amount->amount) . '</h6>
            //         </div>
            //     </li>';
            // }

            // same
            // $shoppingDiscount = $this->this_model->checkShoppingBasedDiscount($re['orderInfo'][0]->total);

            // $shopping_based_html = '';
            // if ($re['orderInfo'][0]->shopping_amount_based_discount > 0) {
            //     $shopping_based_html = '<li>
            //     <div>
            //         <h6>Cart Amount Based Discount(%)</h6>
            //         <h6> - ' . '(' . $shoppingDiscount[0]->discount_percentage . '%)' .
            //         numberFormat($re['orderInfo'][0]->shopping_amount_based_discount) . '</h6>
            //     </div>
            //     </li>';
            // }

            // foreach ($re['order_details'] as $key => $v) {
            //     $returned_quantity = $this->this_model->getReturnedQuantity($v->order_details_id);
            //     $o_detail .= '<tr>
            //         <td>' . $v->name . '</td>
            //         <td>' . $v->quantity  . '</td>
            //         <td>' .  $returned_quantity  . '</td>
            //         <td>' . $v->discount . '</td>
            //         <td>' . $v->calculation_price . '</td>
            //     </tr>';
            // }

            // same
            // $o_info = '<li>
            //         <div>
            //             <h6>Subtotal </h6>
            //             <h6>' . $re['orderInfo'][0]->total . '</h6>
            //         </div>
            //     </li>
            //     ' . $html . '' . $shopping_based_html . '
            //     <li>
            //         <div>
            //             <h6>Total </h6>
            //             <h6>' . numberFormat($re['orderInfo'][0]->payable_amount) . '</h6>
            //         </div>
            //     </li>';


            // $date = ' <h4></h4>
            //     <h5> <span>Date : </span> ' . date('d - m - Y', $re['orderInfo'][0]->dt_added) . ' </h5>';

            // $return_date = ' <h4></h4>
            //     <h5> <span>Refund Date : </span> ' . date('d - m - Y', $re['return_orderInfo'][0]->dt_added) . ' </h5>';
            // 'o_detail' => $o_detail, 'o_info' => $o_info, 'return_detail' => $ro_detail, 'return_info' => $ro_info, 'date' => $date, 'return_date' => $return_date
            echo json_encode(['order_details_Html' => $order_details_Html, 'returnOrder_details_Html' => $returnOrder_details_Html]);
        }
    }


    public function removeSaleRecord()
    {
        if ($this->input->post()) {
            $res = $this->this_model->removeSaleRecord($this->input->post());
            echo 1;
        }
    }

    public function print_sell()
    {
        $this->load->view('print');
    }

    public function print_sell_html()
    {
        $this->load->view('print_html');
    }

    public function parked_sell()
    {
        $this->load->view('parked_sell');
    }

    public function parked_sell_list()
    {
        $data['order_row'] = $this->this_model->getParkedOrderList();
        // dd($data['order_row']);
        $this->load->view('parked_sell_list', $data);
    }

    public function update_temp_order()
    {
        $return = $this->this_model->update_temp_order($_POST);
        print_r($return);
        exit;
    }
    public function update_same_product()
    {
        $return = $this->this_model->update_same_product($_POST);
    }

    public function check_quantity()
    {
        $return = $this->this_model->check_quantity($_POST);
        echo $return;
        exit();
    }

    public function set_qnt()
    {
        $this->this_model->set_qnt($_POST);
    }

    public function check_quantity_val()
    {
        $return = $this->this_model->check_quantity_val($_POST);
        echo json_encode($return);
        exit();
    }

    public function update_parked_order()
    {
        $this->this_model->update_parked_order($this->input->post());
    }
    public function update_discount_parked_order()
    {
        $this->this_model->update_discount_parked_order($this->input->post());
    }

    ## Sell : Update Order Temp ##
    public function update_order_temp()
    {
        if ($this->input->get()) {
            $temp_qnt = $this->this_model->update_order_temp($this->input->get());
            echo json_encode($temp_qnt);
        }
    }

    ## Sell : Temp Products Div Append ##
    public function temp_order()
    {
        $return = $this->this_model->temp_order($this->input->post());
        echo $return;
        exit();
    }

    ## Sell : Delete Temp Order ##
    public function delete_parked_order()
    {
        $this->this_model->delete_parked_order($this->input->post());
        exit;
    }

    public function delete_tmp_order()
    {
        error_reporting(0);
        // print_r($this->input->get());
        // exit;
        $product_temp_id = $_GET['product_id'];
        $product_id = $_GET['true_product_id'];
        $pro_temp_qnt = $_GET['pro_temp_qnt'];

        if ($pro_temp_qnt == '' || $pro_temp_qnt == null) {
            $pro_temp_qnt = '0';
        }

        $query = $this->db->query("SELECT quantity,temp_quantity FROM product_weight WHERE id = '$product_id'");
        $result = $query->row_array();

        $qnt = $result['quantity'];
        $temp_qnt = $result['temp_quantity'];
        $this->db->query("UPDATE product_weight SET quantity = $qnt + $pro_temp_qnt,temp_quantity = $temp_qnt-$pro_temp_qnt
WHERE id= '$product_id'");

        $subtotal = $_GET['subtotal'];
        $disc_percentage = $_GET['disc_percentage'];

        $price_query = $this->db->query("SELECT price from order_temp WHERE id = '$product_temp_id'");
        $price_result = $price_query->row_array();
        $price_db = $price_result['price'];

        $this->db->query("DELETE FROM order_temp WHERE id = '$product_temp_id'");

        $new_subtotal = $subtotal - $price_db;
        $new_discount_total = ($new_subtotal * $disc_percentage) / 100;
        $new_total = $new_subtotal - $new_discount_total;

        $array = array(
            'new_subtotal' => $new_subtotal,
            'disc_percentage' => $disc_percentage,
            'new_discount_total' => $new_discount_total,
            'new_total' => $new_total
        );

        echo json_encode($array);
        exit();
    }

    ## Sell : New Order ##
    public function order_checkout()
    {

        // print_r($this->input->post());exit;
        $response = $this->this_model->order_checkout($this->input->post());
        exit;

        //Parked Sale : Just store in database
        if (isset($_REQUEST['parked_sell']) && $_REQUEST['parked_sell'] == 'Park Sale') {

            $vendor_id = $this->session->userdata('id');
            $user_id = $this->input->post('customer');
            $sub_total = $this->input->post('hidden_subtotal');
            $disc_percentage = $this->input->post('disc_percentage');
            $discount_total = $this->input->post('hidden_discount_total');
            $total = $this->input->post('hidden_total');
            $register_id = $this->input->post('register_id');
            /*$parent_id = $this->session->userdata('parent_id');
if($parent_id == '0')
{
$parent_insert_id = '1';
}
else
{
$parent_insert_id = $this->session->userdata('parent_id');
}*/

            $park_array = array(
                'vendor_id' => $vendor_id,
                /*'parent_user_id' => $parent_insert_id,*/
                'user_id' => $user_id,
                'register_id' => $register_id,
                'subtotal' => $sub_total,
                'discount_per' => $disc_percentage,
                'total_discount' => $discount_total,
                'total' => $total,
                'payment_type' => '2',
                'order_no' => 'OD' . strtotime(date('Y-m-d H:i:s')),
                'status' => '1',
                'dt_added' => strtotime(date('Y-m-d H:i:s')),
                'dt_updated' => strtotime(date('Y-m-d H:i:s'))
            );
            $this->db->insert('pos_order', $park_array);
            $last_inserted_order_id = $this->db->insert_id();

            //Order Details
            foreach ($_REQUEST as $key => $value) {
                if (count(explode('qnt', $key)) > 1) {
                    $example = explode('qnt', $key);

                    $product_temp_id = $example['1'];

                    if ($product_temp_id != '') {

                        $pro_temp_row = $this->db->query("SELECT Product_id, quantity, price, discount, discount_price FROM order_temp WHERE id
= '$product_temp_id'");
                        $pro_temp_result = $pro_temp_row->row_array();

                        $this->db->query("UPDATE order_temp SET park = '1' WHERE id = '$product_temp_id'");

                        $p_id = $pro_temp_result['Product_id'];
                        $quantity_temp = $pro_temp_result['quantity'];

                        $query = $this->db->query("SELECT quantity, temp_quantity FROM product WHERE id = '$p_id'");
                        $result = $query->row_array();
                        $temp_qnt = $result['quantity'];

                        if ($quantity_temp == '') {
                            $quantity_temp = '0';
                        }

                        $this->db->query("UPDATE product SET quantity = $temp_qnt - $quantity_temp, temp_quantity = $temp_qnt - $quantity_temp
WHERE id= '$p_id'");

                        $order_temp_array = array(
                            'order_id' => $last_inserted_order_id,
                            'user_id' => $user_id,
                            'pid' => $pro_temp_result['Product_id'],
                            'customer_id' => $customer_id,
                            'product_id' => $product_temp_id,
                            'quantity' => $pro_temp_result['quantity'],
                            'price' => $pro_temp_result['price'],
                            'discount' => $pro_temp_result['discount'],
                            'discount_price' => $pro_temp_result['discount_price'],
                            'status' => '1',
                            'dt_added' => strtotime(date('Y-m-d H:i:s')),
                            'dt_updated' => strtotime(date('Y-m-d H:i:s')),
                        );
                        $this->db->insert('order_detail', $order_temp_array);
                    }
                }
            }

            $this->session->set_flashdata("msg", "Park created successfully.");
            redirect(base_url() . 'index.php/sell/index');
        } else {

            $user_id = $this->session->userdata('id');
            $customer_id = $this->input->post('customer');
            $sub_total = $this->input->post('hidden_subtotal');
            $disc_percentage = $this->input->post('disc_percentage');
            $discount_total = $this->input->post('hidden_discount_total');
            $total = $this->input->post('hidden_total');
            $register_id = $this->input->post('register_id');
            /*$parent_id = $this->session->userdata('parent_id');
if($parent_id == '0')
{
$parent_insert_id = '1';
}
else
{
$parent_insert_id = $this->session->userdata('parent_id');
}*/

            if (isset($_REQUEST['cash']) && $_REQUEST['cash'] == 'Cash') {

                $reg_query = $this->db->query("SELECT cash_amount_expected, counted, difference FROM register WHERE id = $register_id");
                $reg_result = $reg_query->row_array();

                $cash_amount_expected = $reg_result['cash_amount_expected'] + $total;
                $counted = $reg_result['counted'];
                $difference = $counted - $cash_amount_expected;

                $this->db->query("UPDATE register SET cash_amount_expected = '$cash_amount_expected', counted = '$counted' WHERE id =
$register_id");

                $cash_array = array(
                    'user_id' => $user_id,
                    /*'parent_user_id' => $parent_insert_id,*/
                    'customer_id' => $customer_id,
                    'register_id' => $register_id,
                    'subtotal' => $sub_total,
                    'discount_per' => $disc_percentage,
                    'total_discount' => $discount_total,
                    'total' => $total,
                    'payment_type' => '0',
                    'order_no' => 'OD' . strtotime(date('Y-m-d H:i:s')),
                    'status' => '1',
                    'dt_added' => strtotime(date('Y-m-d H:i:s')),
                    'dt_updated' => strtotime(date('Y-m-d H:i:s'))
                    //'park' => '1'
                );
                $this->db->insert('order', $cash_array);
                $last_inserted_order_id = $this->db->insert_id();

                //Order Details
                foreach ($_REQUEST as $key => $value) {

                    if ((count(explode('qnt', $key)) > 1) && (count(explode('discount', $key)) > 0)) {

                        //Temp Qnt
                        $example = explode('qnt', $key);
                        $product_temp_id = $example['1'];

                        //Temp Disc
                        $example = explode('discount', $key);

                        if ($product_temp_id != '') {

                            $pro_temp_row = $this->db->query("SELECT Product_id, quantity, price, discount, discount_price FROM order_temp WHERE id
= '$product_temp_id'");
                            $pro_temp_result = $pro_temp_row->row_array();

                            //$this->db->query("UPDATE order_temp SET park = '2' WHERE id = '$product_temp_id'");

                            $p_id = $pro_temp_result['Product_id'];
                            $quantity_temp = $pro_temp_result['quantity'];

                            $query = $this->db->query("SELECT quantity, temp_quantity FROM product WHERE id = '$p_id'");
                            $result = $query->row_array();
                            $temp_qnt = $result['quantity'];

                            $temp_qnt_new = $temp_qnt - $quantity_temp;

                            if ($temp_qnt_new == '') {
                                $temp_qnt_new = '0';
                            }

                            $this->db->query("UPDATE product SET quantity = $temp_qnt_new, temp_quantity = $temp_qnt_new WHERE id= '$p_id'");

                            $order_temp_array = array(
                                'order_id' => $last_inserted_order_id,
                                'user_id' => $user_id,
                                'pid' => $pro_temp_result['Product_id'],
                                'customer_id' => $customer_id,
                                'product_id' => $product_temp_id,
                                'quantity' => $pro_temp_result['quantity'],
                                'price' => $pro_temp_result['price'],
                                'discount' => $pro_temp_result['discount'],
                                'discount_price' => $pro_temp_result['discount_price'],
                                'status' => '1',
                                'dt_added' => strtotime(date('Y-m-d H:i:s')),
                                'dt_updated' => strtotime(date('Y-m-d H:i:s')),
                            );
                            $this->db->insert('order_detail', $order_temp_array);
                            $this->db->query("DELETE FROM order_temp WHERE id = '$product_temp_id'");
                        }
                    }
                }

                if ($last_inserted_order_id) {
                    redirect(base_url() . 'index.php/sell/print_sell?ZqRl=' . base64_encode($last_inserted_order_id));
                }
            }

            if (isset($_REQUEST['credit_card']) && $_REQUEST['credit_card'] == 'Credit Card') {

                $reg_query = $this->db->query("SELECT credit_card_expected, credit_card_counted, credit_card_differences FROM register
WHERE id = $register_id");
                $reg_result = $reg_query->row_array();

                $cash_amount_expected = $reg_result['credit_card_expected'] + $total;
                $counted = $reg_result['credit_card_counted'];
                $difference = $counted - $cash_amount_expected;

                $this->db->query("UPDATE register SET credit_card_expected = '$cash_amount_expected', credit_card_counted = '$counted'
WHERE id = $register_id");

                $cash_array = array(
                    'user_id' => $user_id,
                    /*'parent_user_id' => $parent_insert_id,*/
                    'customer_id' => $customer_id,
                    'register_id' => $register_id,
                    'subtotal' => $sub_total,
                    'discount_per' => $disc_percentage,
                    'total_discount' => $discount_total,
                    'total' => $total,
                    'payment_type' => '1',
                    'order_no' => 'OD' . strtotime(date('Y-m-d H:i:s')),
                    'status' => '1',
                    'dt_added' => strtotime(date('Y-m-d H:i:s')),
                    'dt_updated' => strtotime(date('Y-m-d H:i:s'))
                    //'park' => '1'
                );
                $this->db->insert('order', $cash_array);
                $last_inserted_order_id = $this->db->insert_id();

                //Order Details
                foreach ($_REQUEST as $key => $value) {

                    if ((count(explode('qnt', $key)) > 1) && (count(explode('discount', $key)) > 0)) {

                        //Temp Qnt
                        $example = explode('qnt', $key);
                        $product_temp_id = $example['1'];

                        // //Temp Disc
                        // $example = explode('discount', $key);

                        if ($product_temp_id != '') {

                            $pro_temp_row = $this->db->query("SELECT Product_id, quantity, price, discount, discount_price FROM order_temp WHERE id
= '$product_temp_id'");
                            $pro_temp_result = $pro_temp_row->row_array();

                            //$this->db->query("UPDATE order_temp SET park = '2' WHERE id = '$product_temp_id'");

                            $p_id = $pro_temp_result['Product_id'];
                            $quantity_temp = $pro_temp_result['quantity'];

                            $query = $this->db->query("SELECT quantity, temp_quantity FROM product WHERE id = '$p_id'");
                            $result = $query->row_array();
                            $temp_qnt = $result['quantity'];

                            $temp_qnt_new = $temp_qnt - $quantity_temp;

                            if ($temp_qnt_new == '') {
                                $temp_qnt_new = '0';
                            }

                            $this->db->query("UPDATE product SET quantity = $temp_qnt_new, temp_quantity = $temp_qnt_new WHERE id= '$p_id'");

                            $order_temp_array = array(
                                'order_id' => $last_inserted_order_id,
                                'user_id' => $user_id,
                                'pid' => $pro_temp_result['Product_id'],
                                'customer_id' => $customer_id,
                                'product_id' => $product_temp_id,
                                'quantity' => $pro_temp_result['quantity'],
                                'price' => $pro_temp_result['price'],
                                'discount' => $pro_temp_result['discount'],
                                'discount_price' => $pro_temp_result['discount_price'],
                                'status' => '1',
                                'dt_added' => strtotime(date('Y-m-d H:i:s')),
                                'dt_updated' => strtotime(date('Y-m-d H:i:s')),
                            );
                            $this->db->insert('order_detail', $order_temp_array);
                            $this->db->query("DELETE FROM order_temp WHERE id = '$product_temp_id'");
                        }
                    }
                }

                if ($last_inserted_order_id) {
                    redirect(base_url() . 'index.php/sell/print_sell?ZqRl=' . base64_encode($last_inserted_order_id));
                }
            }
        }
    }

    public function single_delete_sales_history()
    {

        $ids = $_REQUEST['ids'];
        $this->this_model->single_delete_sales_history($ids);
        exit;
    }
    public function single_delete_sell_sales_history()
    {

        $ids = $_REQUEST['ids'];
        $this->this_model->single_delete_sell_sales_history($ids);
        exit;
    }

    ##Search Product##
    public function ajax_search_product()
    {
        $vendor_id = $this->session->userdata('id');
        $search = $_GET['search'];
        $query_product = $this->db->query("SELECT p.* FROM product as p
        INNER JOIN category as c on p.category_id = c.id
        INNER JOIN subcategory as s on p.subcategory_id = s.id
        WHERE p.status != '9' AND (p.name LIKE '%$search%'
        OR c.name LIKE '%$search%'
        OR s.name LIKE '%$search%')
        AND p.vendor_id = '$vendor_id' ORDER BY id DESC ");
        $result = $query_product->result();

        $i = '1';

        if (count($result) > 0) {

            echo '<div class="sel_subcatagory_itm" style="display: block;">';
            foreach ($result as $product) {
                echo '<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 no_padd"
        onclick="return select_product_variant(' . $product->id . ',0)">';
                echo '<div class="subcatg_list text-center" onclick="return select_product_variant(' . $product->id . ',0)">';
                echo '<a href="javascript:;"><span> ' . $product->name . ' </span></a>';
                echo '</div>';
                echo '</div>';
                $i++;
            }
            echo '</div>';
        } else {
            echo '<p align="center"><b>There is no product</b></p>';
        }
        exit();
    }

    public function ajax_search_product_old()
    {

        $user_id = $this->session->userdata('id');
        $parent_user_id = $this->session->userdata('parent_id');
        $search = $_REQUEST['search'];

        //Outlet wise User Products
        $outlet_sub_query = $this->db->query("SELECT outlet_id FROM sub_user_outlet WHERE sub_user_id = '$user_id'");
        $outlet_sub_result = $outlet_sub_query->result();

        $array = array();
        foreach ($outlet_sub_result as $imp_res) {
            $array[] = $imp_res->outlet_id;
        }
        $implode = implode(',', $array);

        if ($outlet_sub_query->num_rows > 0) {

            //For All Outlet
            if ($outlet_sub_result[0]->outlet_id == '0') {

                $res = $this->db->query("SELECT p.*, pt.name as tag_name FROM product as p LEFT JOIN product_tag as pt ON pt.product_id
= p.id WHERE (pt.name LIKE '%$search%' OR p.name LIKE '%$search%') AND p.status != '9' AND
(p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id = '$user_id' OR p.user_id =
'$parent_user_id') AND p.name != '' GROUP BY p.name");
                $row_search = $res->result();

                $res_type = $this->db->query("SELECT p.*, pt.name as tag_name FROM product as p LEFT JOIN product_tag as pt ON
pt.product_id = p.id WHERE (pt.name LIKE '%$search%' OR p.name LIKE '%$search%') AND p.status != '9' AND
(p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id = '$user_id' OR p.user_id =
'$parent_user_id') AND pt.name != '' GROUP BY p.name");
                $row_search_type = $res_type->result();
            } else {

                //For Selected Outlet
                $res = $this->db->query("SELECT p.*, pt.name as tag_name, op.outlet_id FROM product as p
INNER JOIN outlet_product as op ON op.product_id = p.id
LEFT JOIN product_tag as pt ON pt.product_id = p.id
WHERE op.retail_price_tax != '0' AND op.outlet_id IN ($implode) AND (pt.name LIKE '%$search%' OR p.name LIKE
'%$search%') AND p.status != '9' AND (p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id =
'$user_id' OR p.user_id = '$parent_user_id') AND p.name != '' GROUP BY p.name");
                $row_search = $res->result();


                $res_type = $this->db->query("SELECT p.*, pt.name as tag_name FROM product as p
INNER JOIN outlet_product as op ON op.product_id = p.id
LEFT JOIN product_tag as pt ON pt.product_id = p.id AND op.outlet_id IN ($implode)
WHERE op.retail_price_tax != '0' AND op.outlet_id IN ($implode) AND (pt.name LIKE '%$search%' OR p.name LIKE
'%$search%') AND p.status != '9' AND (p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id =
'$user_id' OR p.user_id = '$parent_user_id') AND pt.name != '' GROUP BY p.name, pt.id");
                $row_search_type = $res_type->result();
            }
        } else {

            //For All Outlet
            $res = $this->db->query("select p.*, pt.name as tag_name from product as p LEFT JOIN product_tag as pt ON pt.product_id
= p.id WHERE (pt.name LIKE '%$search%' OR p.name LIKE '%$search%') AND p.status != '9' AND
(p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id = '$user_id' OR p.user_id =
'$parent_user_id') AND p.name != '' GROUP BY p.name");
            $row_search = $res->result();

            $res_type = $this->db->query("select p.*, pt.name as tag_name from product as p LEFT JOIN product_tag as pt ON
pt.product_id = p.id WHERE (pt.name LIKE '%$search%' OR p.name LIKE '%$search%') AND p.status != '9' AND
(p.parent_user_id='$parent_user_id' OR p.parent_user_id ='$user_id' OR p.user_id = '$user_id' OR p.user_id =
'$parent_user_id') AND pt.name != ''");
            $row_search_type = $res_type->result();
        }

        $output = '';
        $i = '1';
        $count = 1;

        echo '<div class="sell_tab">';
        echo '<h4>Product Name</h4>';
        echo '<ul>';
        if (count($row_search) > 0) {
            foreach ($row_search as $product) {
                echo '<li>';
                echo '<a name="product_type" id="select_product" onclick="return select_product(' . $product->id . ');">';
                echo '<span>' . $product->name . '</span></a><br>';
                echo '</li>';

                $i++;
            }
        } else {
            echo '<li style="background: #dff0d8;"><span class="no_found">';
            echo 'No matching record found';
            echo '</span></li>';
            $i++;
        }
        echo '</ul>';
        echo '</div>';

        echo '<div class="sell_tab">';
        echo '<h4>Product Tag</h4>';
        echo '<ul>';
        if (count($row_search_type) > 0) {
            foreach ($row_search_type as $tag) {
                echo '<li>';
                echo '<a name="product_type" id="select_product" onclick="return select_product(' . $tag->id . ');">';
                echo '<span>' . $tag->tag_name . '</span></a><br>';
                echo '</li>';

                $i++;
            }
        } else {
            echo '<li style="background: #dff0d8;"><span class="no_found">';
            echo 'No matching record found';
            echo '</span></li>';
            $i++;
        }
        echo '</ul>';
        echo '</div>';

        exit();
    }

    ##Update Product Temp Qnt##
    public function update_same_as_qnt()
    {
        $vendor_id = $this->session->userdata('id');

        // $this->db->query('UPDATE product_weight SET `quantity` = quantity+temp_quantity,temp_quantity = "0"');
        // $this->db->query('UPDATE product SET `temp_quantity` = `quantity`');
        $this->db->query("DELETE FROM order_temp WHERE branch_id = '$vendor_id' AND park = '0' ");

        return;
        exit();
    }

    ##Update Product Temp Qnt##
    public function test()
    {
        /*$user_id = $_REQUEST['user_id'];
$this->db->query("DELETE FROM `order_temp` WHERE `user_id` = '$user_id'");
$this->db->query('UPDATE product SET `temp_quantity` = `quantity`');
return;
exit();*/
        echo '1';

        exit();
    }

    ##Send Mail In Print##
    public function send_email()
    {
        $order_id = $_POST['order_id'];
        $vendor_id = $this->session->userdata('id');

        $order_query = $this->db->query("SELECT od.calculation_price AS price, od.actual_discount AS discount, od.quantity,
od.dt_updated, p.name, pw.discount_price AS final_price FROM pos_order_detail as od
LEFT JOIN product as p ON p.id = od.product_id
LEFT JOIN product_weight as pw ON pw.id = od.product_variant_id
WHERE od.pos_order_id = '$order_id' AND p.vendor_id = '$vendor_id' AND od.status != '9'");
        $order_row = $order_query->result();

        $order_query_ = $this->db->query("SELECT total_price AS subtotal, total_discount,calculation_price AS total FROM
`pos_order` WHERE id = '$order_id' AND vendor_id = '$vendor_id' AND status != '9'");
        $order_row_ = $order_query_->row_array();

        $this->load->library('email');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'test.cmexpertise@gmail.com',
            'smtp_pass' => 'cm@@123#',
            'mailtype' => 'text',
            'charset' => 'utf-8'
        );

        $html = '<html>

<head></head>

<body style="width: 50%; border: 1px solid black; ">
    <div>

        <br>
        <div style="text-align: center"><b>Point of Sale</b></div><br>
        <div style="text-align: center"><b>CMExpertise</b></div><br>
        <div style="text-align: center"><b>Receipt / Tax Invoice</b></div><br>
        <div style="text-align: center"><b>Invoice:</b></div>
        <div style="text-align: center"><b> ' . date("jS \of F Y h:i:s A") . ' </b></div>
        <div style="text-align: center"><b> Served by: CM Expertise on Main Register </b></div><br>';


        $html .= '
        <table border="1" style="width: 100%; border: 1px solid" cellpadding="5">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($order_row as $order) {

            $html .= '
                <tr>
                    <td style="text-align: center"> ' . $order->name . ' </td>
                    <td style="text-align: center"> ' . $order->quantity . ' </td>
                    <td style="text-align: center"> $' . $order->final_price . '.00 </td>
                    <td style="text-align: center"> $' . $order->price . ' </td>
                </tr>
                ';
        }

        $html .= '
            </tbody>';
        $html .= '
        </table>';

        $html .= '

        <br><br>
        <div>

            <hr>
            <label style="float: left;"> <b>Subtotal</b> </label> <label style="float: right;"> $' .
            $order_row_["subtotal"] . ' </label><br><br>
            <hr>
            <label style="float: left;"> <b>Discount(%)</b> </label> <label style="float: right;"> $' .
            $order_row_["discount_per"] . ' </label><br><br>
            <hr>
            <label style="float: left;"> <b>Discount Price</b> </label> <label style="float: right;"> $' .
            $order_row_["total_discount"] . ' </label><br><br>
            <hr>
            <label style="float: left;"> <b>Total</b> </label> <label style="float: right;"> $' . $order_row_["total"] .
            ' </label><br>
            <hr>

            <br><br>
            <div><span style="text-align: center"><b>Customer Copy</b></span></div>
        </div>
        ';


        $html .= '
    </div>
</body>

</html>';


        $sub_total = $_REQUEST['sub_total'];
        $disc_percentage = $_REQUEST['discount_per'];
        $discount_total = $_REQUEST['discount_price'];
        $total = $_REQUEST['total'];
        $to_email = $this->input->post('rec_email');

        //Fetch Email and Name from User Id
        $query_user = $this->db->query("SELECT email, name FROM vendor WHERE id = '$vendor_id'");
        $query_result = $query_user->row_array();

        $from_email = $query_result['email'];
        $subject = 'Order';

        $receipt = "
Sub-Total = $sub_total
Discount(%) = $disc_percentage
Discount Price = $discount_total
Total = $total

";

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->set_mailtype("html");

        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($html);

        if ($this->email->send()) {

            $this->session->set_flashdata("msg", "Mail sent successfully.");
        } else {

            $this->session->set_flashdata("msg", "Error in sent mail.");
        }

        redirect(base_url() . 'sell/print_sell?ZqRl=' . base64_encode($order_id));
    }

    public function select_category()
    {
        $this->this_model->select_category();
    }


    public function select_subcategory()
    {

        $type_id = $_GET['type_id'];

        $vendor_id = $this->session->userdata('id');


        $query_subcategory = $this->db->query("SELECT * FROM subcategory WHERE status != '9' AND vendor_id = '$vendor_id' AND
category_id ='$type_id' ORDER BY id DESC ");

        $result = $query_subcategory->result();

        $i = '1';

        if (count($result) > 0) {

            $html = '';
            $html .= '<div class="sel_subcatagory_itm" style="display: block;">';
            foreach ($result as $subcategory) { ?>

                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 no_padd" onclick="return select_product_data('<?php echo $subcategory->id; ?>','<?php echo $subcategory->name; ?>' )">
                    <div class="subcatg_list text-center">
                    <?php
                    //                        echo '<input type="hidden" id="cat_'.$subcategory->id.'" name="cat_id" value="'.$subcategory->id.'" >';

                    echo '<a href="javascript:;"><span> ' . $subcategory->name . ' </span></a>';
                    echo '</div>';
                    echo '</div>';
                    $i++;
                }
                echo '</div>';
            } else {
                echo '<p align="center"><b>There is no subcategory</b></p>';
            }
            exit();
        }

        public function select_product_data()
        {

            $type_id = $_GET['type_id'];

            $vendor_id = $this->session->userdata('id');

            $query_product = $this->db->query("SELECT * FROM product WHERE status != '9'  AND vendor_id = '$vendor_id' AND subcategory_id ='$type_id' ORDER BY id DESC ");
            $result = $query_product->result();

            $i = '1';

            if (count($result) > 0) {

                echo '<div class="sel_subcatagory_itm" style="display: block;">';
                foreach ($result as $product) { ?>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 no_padd" onclick="return select_product_variant('<?php echo $product->id; ?>','<?php echo $product->name; ?>')">
                            <div class="subcatg_list text-center">
                            <?php
                            echo '<a href="javascript:;"><span> ' . $product->name . ' </span></a>';
                            echo '</div>';
                            echo '</div>';
                            $i++;
                        }
                        echo '</div>';
                    } else {
                        echo '<p align="center"><b>There is no product</b></p>';
                    }
                    exit();
                }

                public function select_product_variant()
                {

                    $type_id = $_GET['type_id'];

                    $vendor_id = $this->session->userdata('id');

                    $query_variant = $this->db->query("SELECT pw.id, pw.weight_id,pw.weight_no,w.name FROM product_weight as pw LEFT JOIN weight as w ON pw.weight_id = w.id  WHERE w.status != '9' AND  pw.status != '9'  AND pw.vendor_id = '$vendor_id' AND product_id ='$type_id' ORDER BY pw.id DESC ");
                    $result = $query_variant->result();

                    $i = '1';

                    if (count($result) > 0) {

                        echo '<div class="sell_four_box" style="display: block;">';
                        foreach ($result as $product) {
                            ?>
                                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 no_padd" onclick="return select_product('<?php echo $product->id; ?>','<?php echo $product->name; ?>')">
                    <?php
                            echo '<div class="four_type text-center">';
                            echo '<a href="javascript:;"><span> ', $product->weight_no . $product->name . ' </span></a>';
                            echo '</div>';
                            echo '</div>';
                            $i++;
                        }
                        echo '</div>';
                    } else {
                        echo '<p align="center"><b>There is no variant</b></p>';
                    }
                    exit();
                }

                public function discard_parked_order()
                {
                    $this->this_model->discard_parked_order($this->input->post());
                }

                // Dkadded
                public function changeParkTime()
                {
                    $this->this_model->changeParkTime($this->input->post());
                }
                // 

                public function isAvailable()
                {
                    if ($this->input->post()) {
                        $vendor_id = $this->session->userdata('id');
                        $check = $this->input->post();
                        $this->db->select('*');
                        if (isset($check['email'])) {
                            $field = $this->input->post('email');
                            $f = 'email';
                        } else {
                            $field = $this->input->post('mobile');
                            $f = 'mobile';
                        }
                        $this->db->where($f, $field);
                        $this->db->where('branch_id', $vendor_id);
                        $query = $this->db->get('customer')->result();
                        // echo $this->db->last_query();

                        if (count($query) == 0) {
                            echo "true";
                        } else {
                            echo "false";
                        }
                    }
                }

                public function customer_add()
                {
                    if ($this->input->post()) {
                        $res =  $this->this_model->addCustomer($this->input->post());
                        if ($res) {
                            $this->utility->setFlashMessage('success', 'Customer added successfully');
                        } else {
                            $this->utility->setFlashMessage('danger', 'Somthing Went Wrong');
                        }
                        redirect(base_url() . 'sell_development');
                    }
                }
            }
