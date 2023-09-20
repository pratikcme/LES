<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class QuickProduct extends Vendor_Controller
{
    function __construct()
    {

        parent::__construct();
        // $vendor_id = $this->session->userdata['id'];
        $this->load->model('product_model', 'this_model');
        // echo 1;exit;

    }

    public function index()
    {
        $this->load->view('quick_product/add');
    }
}
