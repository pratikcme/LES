<?php

function sendMail($data)
{
  // print_r($data);die;
  $CI = &get_instance();

  $config = array(
    'protocol' => 'smtp',
    'smtp_host' => '162.241.86.206',
    'smtp_port' => '587',
    'smtp_user' => 'test@launchestore.com',
    'smtp_pass' => 'HhZ~sU(@drk_',
    // 'smtp_secure' => 'ssl',
    'smtp_timeout' => 20,
    'priority' => 1,
    'charset' => 'utf-8',
    'mailtype' => 'html',
    'wordwrap' => TRUE
  );

  $CI = &get_instance();

  $CI->load->library('email', $config);
  $CI->email->initialize($config);
  $CI->email->set_newline("\r\n");
  $CI->email->from('test@launchestore.com', $CI->siteTitle);
  $CI->email->to($data['to']);
  $CI->email->subject($data['subject']);
  $CI->email->message($data['message']);

  if ($CI->email->send()) {
    return true;
  } else {
    print_r($CI->email->print_debugger());
    die;
    return FALSE;
  }
}

function getMycartSubtotal()
{
  $CI = &get_instance();
  $CI->load->model('api_v3/common_model', 'co_model');
  $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));


  $total = number_format((float)0, 2, '.', '');
  $CI->load->model('frontend/product_model');
  if ($CI->session->userdata('user_id') == '') {

    if (isset($_SESSION['My_cart'])) {
      foreach ($_SESSION['My_cart'] as $key => $value) {
        $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
          $product[0]->discount_price = $product[0]->without_gst_price;
        }
        $total += numberFormat(numberFormat($product[0]->discount_price) * numberFormat($value['quantity']));
      }
    }
  } else {

    $CI->load->model('frontend/product_model', 'product_model');
    $my_cart = $CI->product_model->getMyCart();
    foreach ($my_cart as $key => $value) {
      if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
        $value->discount_price = $value->without_gst_price;
      }
      $total += numberFormat(numberFormat($value->discount_price) * numberFormat($value->quantity));
    }
    // dd($total);
  }
  $total = number_format($total, 2, '.', '');
  return $total;
}

function totalSaving()
{
  $CI = &get_instance();
  $actal_price_total = 0;
  $discount_price_total = number_format((float)0, 2, '.', '');
  $totalSaving = 0;
  if ($CI->session->userdata('user_id') == '') {
    if (isset($_SESSION['My_cart'])) {
      foreach ($_SESSION['My_cart'] as $key => $value) {
        $actal_price_total += $value['total'];
        $discount_price_total += $value['product_price'] * $value['quantity'];
      }
      $totalSaving = $actal_price_total - $discount_price_total;
    }
  } else {
    $CI->load->model('frontend/product_model', 'product_model');
    $my_cart = $CI->product_model->getMyCart();
    foreach ($my_cart as $key => $value) {
      $actal_price_total += $value->price * $value->quantity;
      $discount_price_total += $value->discount_price * $value->quantity;
    }
    $totalSaving = $actal_price_total - $discount_price_total;
  }
  $totalSaving = number_format((float)$totalSaving, 2, '.', '');
  return $totalSaving;
}

function cartItemCount()
{
  $CI = &get_instance();
  $count = 0;
  if ($CI->session->userdata('user_id') == '') {
    if (isset($_SESSION['My_cart'])) {
      $count = count($_SESSION['My_cart']);
    }
  } else {
    $CI->load->model('frontend/product_model', 'product_model');
    $my_cart = $CI->product_model->getMyCart();
    $count = count($my_cart);
  }
  return $count;
}

function NavbarDropdown()
{
  $html = '';
  $CI = &get_instance();
  $CI->load->model('api_v3/common_model', 'co_model');
  $data['isShow'] = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));

  $CI->load->model('common_model');
  $default_product_image = $CI->common_model->default_product_image();
  $data['default_product_image'] = $default_product_image;
  if ($CI->session->userdata('user_id') == '') {
    if (isset($_SESSION['My_cart'])) {
      $data['sample'] = '1';
      // dd($_SESSION['My_cart']);
      $html = $CI->load->view($CI->session->userdata('template_name') . '/ajaxView/cart_view_without_login', $data, true);
    }
  } else {

    $CI->load->model('frontend/product_model', 'product_model');

    $my_cart = $CI->product_model->getMyCart();
    $data['my_cart'] = $my_cart;
    //  foreach ($my_cart as $key => $value) {
    //     $product_image = $CI->product_model->GetUsersProductInCart($value->product_weight_id);

    //     if(!empty($isShow) && $isShow[0]->display_price_with_gst == '1'){
    //         $product_image[0]->discount_price = $product_image[0]->without_gst_price;
    //     }  

    //     $product_image[0]->image = preg_replace('/\s+/', '%20', $product_image[0]->image);
    //     if(!file_exists('public/images/'.$CI->folder.'product_image/'.$product_image[0]->image) || $product_image[0]->image == '' ){
    //       if(strpos($product_image[0]->image, '%20') === true || $product_image[0]->image == ''){
    //         $product_image[0]->image = $default_product_image;
    //       }
    //     }

    //     $value->product_name = $product_image[0]->name;
    //     $value->image = $product_image[0]->image;

    //     $encode_id =  $CI->utility->safe_b64encode($value->product_id);
    //     $varient_id =  $CI->utility->safe_b64encode($value->product_weight_id);
    //     $data['value'] = $value;
    //     $data['product_image'] = $product_image;
    //     $data['encode_id'] = $encode_id;
    //     $data['varient_id'] = $varient_id;
    $html = $CI->load->view($CI->session->userdata('template_name') . '/ajaxView/cart_view_with_login', $data, true);
    //  }
  }
  return $html;
}

function getAllBranch()
{
  $CI = &get_instance();
  $CI->load->model('vendor_model');
  return  $CI->vendor_model->getAllVendor();
}

function sendMailSMTP($data, $form_super_admin = '')
{
  $CI = &get_instance();
  $config['protocol'] = "smtp";
  $config['smtp_host'] = "162.241.86.206";
  $config['smtp_port'] = '587';
  $config['smtp_user'] = "test@launchestore.com";
  $config['smtp_pass'] = "HhZ~sU(@drk_";
  $config['smtp_timeout'] = 20;
  $config['priority'] = 1;
  $config['charset'] = 'utf-8';
  $config['wordwrap'] = TRUE;
  $config['crlf'] = "\r\n";
  $config['newline'] = "\r\n";
  $config['mailtype'] = "html";
  $CI = &get_instance();
  $message = $data["message"];
  $CI->load->library('email', $config);
  $CI->email->initialize($config);
  $CI->email->clear();
  $CI->email->from($config['smtp_user'], ($form_super_admin == '') ? $CI->siteTitle : $form_super_admin);
  $CI->email->to($data["to"]);
  if (isset($data["bcc"])) {
    $CI->email->bcc($data["bcc"]);
  }
  $CI->email->reply_to($config['smtp_user'], '<noreply@stagegator.com>');
  $CI->email->subject($data["subject"]);
  $CI->email->message($message);
  $response = $CI->email->send();
  //      echo $this->email->print_debugger();
  // die;
  return true;
}
