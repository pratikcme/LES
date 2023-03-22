<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_category extends Super_Admin_Controller{

	function __construct(){
		parent::__construct();
        $this->url = 'super_admin/food_category/'; 
		$this->load->model('super_admin/food_category_model','this_model');
	}

	public function index()
	{
		$data['page'] = 'super_admin/food_category/list';
        $data['store_type'] = $this->this_model->getStoreType();
        $data['foodCategory'] = $this->this_model->getFoodCategory();
        $data['js'] = array('food_category.js');
        $data['FormAction'] = base_url().$this->url.'add';
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}
    public function add(){
        if($this->input->post()){
            $re = $this->this_model->addFoodCategory($this->input->post());
            if($re){
                $this->utility->setFlashMessage('success','Record inserted successfully');
				redirect(base_url().$this->url);
            }
        }
    }

}
