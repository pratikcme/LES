<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Setting extends Admin_Controller
{
    function __construct()
    {

        parent::__construct();
        $vendor_id = $this->session->userdata['id'];
        $this->load->model('setting_model', 'this_model');
    }



    public function index()
    {
        $email = $this->session->userdata('email');
        $data['app_result'] = $this->vendor_model->vendorByIdEmail($email);
        $data['resultcartData'] = $this->this_model->getCartValue();
        $data['resultcurrencyData'] = $this->this_model->getDefaultCurrency();
        $this->load->view('additional_setting', $data);
    }


    public function cart_add()
    {
        $this->this_model->cart_add();
    }


    public function currency_add()
    {
        $this->this_model->currency_add();
    }
    public function update_display_price_without_gst()
    {
        $this->this_model->update_display_price_without_gst();
    }


    public function profit_percent()
    {
        $data['result'] = $this->this_model->getDefaultPercentage();
        // dd($data['result']);
        // print_r( $data['result']);die;
        $this->load->view('profit_percent', $data);
    }
    public function profit_add()
    {
        $this->this_model->profit_add();
        lq();
    }
    public function subscription()
    {
        $this->load->view('subscription');
    }
    public function subscription_add()
    {

        $this->this_model->subscription_add();
    }
}
