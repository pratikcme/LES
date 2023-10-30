<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class QuickProduct extends Vendor_Controller
{
    function __construct()
    {

        parent::__construct();
        // $vendor_id = $this->session->userdata['id'];
        $this->load->model('quickProduct_model', 'this_model');
        $this->load->model('product_model', 'pro_model');

        // echo 1;exit;

    }



    public function index()
    {
        $data['category_result'] = $this->pro_model->getCategory();

        $data['brand_results'] = $this->pro_model->getBrand();
        $data['subcategory_result'] = $this->pro_model->getSubcategory();
        $this->load->view('quick_product/add', $data);
    }

    public function product_add_update()
    {

        dd($this->input->post());
        $this->pro_model->product_add_update();
    }

    public function category_add_update()
    {
        $this->this_model->category_add_update($this->input->post());
    }

    public function ajaxCategoryData()
    {
        $this->this_model->ajaxCategoryData();
    }
}
