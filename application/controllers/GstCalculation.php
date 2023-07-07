<?php
class GstCalculation extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('GstCalculation_model', 'this_model');
    }

    // public function index()
    // {
    //     $productData = $this->this_model->getProduct();

    //     foreach ($productData as $value) {
    //         $productWeightData = $this->this_model->getProduct_weight($value->id);
    //         foreach ($productWeightData as $value2) {
    //             $gst = $value->gst;
    //             $discount_per = $value2->discount_per;
    //             $MRP = $value2->price;

    //             $inclusive_gst_calculation  = $MRP / ($gst + 100) * 100;
    //             $without_gst_price = numberFormat($inclusive_gst_calculation);



    //             if ($discount_per > 0) {
    //                 $discount_amount =    $without_gst_price * $discount_per / 100; // amount which deduct from base amount
    //                 $discount_amount = numberFormat($discount_amount);
    //                 $discounted_price = numberFormat($without_gst_price - $discount_amount);
    //             } else {
    //                 $discounted_price = $without_gst_price;
    //             }


    //             // add gst //

    //             $exclusive_gst = numberFormat($discounted_price * $gst / 100);

    //             $price_with_gst = numberFormat($discounted_price + $exclusive_gst);
    //             $priceData = [
    //                 'id' => $value2->id,
    //                 'product_id' => $value->id,
    //                 'without_gst_price' => $discounted_price,
    //                 'discounted_price' => $price_with_gst
    //             ];
    //             $this->this_model->change_price_of_discount_price_and_base_price($priceData);
    //             // exit;
    //         }
    //     }
    //     echo "done";
    // }
}
