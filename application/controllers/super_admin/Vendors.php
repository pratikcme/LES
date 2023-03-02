<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends Super_Admin_Controller{

	function __construct(){
		parent::__construct();
		$this->url = 'super_admin/vendors/';
		$this->load->model('super_admin/vendors_model','this_model');
	}

	public function index()
	{
		
		$data['page'] = 'super_admin/vendors/list';
		$data['getVendors'] = $this->this_model->getVendors();
		$data['js'] = array('vendors.js');
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function add(){
		$data['page'] = 'super_admin/vendors/add';
		$data['js'] = array('vendors.js');
		$data['init'] = array('VENDORS.add()');
		$data['FormAction'] = base_url().$this->url.'add';
		if($this->input->post()){
			$this->this_model->add($this->input->post());
			$this->utility->setFlashMessage('success','Vendor Created successfully');
			redirect(base_url().$this->url);
		}
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}



	public function change_status($vendor_id){
		$responce = $this->this_model->change_status($vendor_id);
		if($responce){
			$this->utility->setFlashMessage('success','Vendor status change successfully');
		}
		redirect(base_url().$this->url);
	}

	public function edit($vendor_id=''){
		$d_id = $this->utility->safe_b64decode($vendor_id);
		$data['page'] = 'super_admin/vendors/edit';
		$data['js'] = array('vendors.js');
		$data['init'] = array('VENDORS.edit()');
		$data['editData'] = $this->this_model->getVendors($d_id);
		$data['FormAction'] = base_url().$this->url.'edit/'.$vendor_id;
		if($this->input->post()){
			$responce = $this->this_model->updateVendors($d_id,$this->input->post());
			if($responce){
				$this->utility->setFlashMessage('success','Vendor updated successfully');
				redirect(base_url().$this->url);
			}else{
				$this->utility->setFlashMessage('danger','Somthing went Wrong');
				redirect(base_url().$this->url);
			}
		
		}
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function checkDomainExist(){
		if ($this->input->is_ajax_request()) {
   			$cnt = $this->this_model->checkDomainExist($this->input->post());
   			if($cnt > 0){
   				echo 'false';
   				die();
   			} 
   			echo 'true';
		}
	}

	public function checkEmailExist(){
		if ($this->input->is_ajax_request()) {
   			$cnt = $this->this_model->checkEmailExist($this->input->post());
   			if($cnt > 0){
   				echo 'false';
   				die();
   			} 
   			echo 'true';
		}
	}



}
