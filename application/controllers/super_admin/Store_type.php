<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_type extends Super_Admin_Controller{

	function __construct(){
		parent::__construct();
		$this->url = 'super_admin/store_type/';
		$this->load->model('super_admin/store_type_model','this_model');
	}

	public function index()
	{
		
		$data['page'] = 'super_admin/store_type/list';
		$data['getStore'] = $this->this_model->getStore();
		$data['js'] = array('store_type.js');
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function add(){
		$data['page'] = 'super_admin/store_type/add';
		$data['js'] = array('store_type.js');
		$data['init'] = array('STORE.add()');
		$data['FormAction'] = base_url().$this->url.'add';
		if($this->input->post()){
			$this->this_model->add($this->input->post());
			$this->utility->setFlashMessage('success','Store type Created successfully');
			redirect(base_url().$this->url);
		}
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

    public function delete($id){
        $id = $this->utility->safe_b64decode($id);
        $res = $this->this_model->delete($id);
        if($res){
            $this->utility->setFlashMessage('success','Store type deleted successfully');
        }else{
            $this->utility->setFlashMessage('success','Somthing Went Wrong');
        }
        redirect(base_url().$this->url);
    }

	public function edit($store_type_id=''){
		$d_id = $this->utility->safe_b64decode($store_type_id);
		$data['page'] = 'super_admin/store_type/edit';
        $data['id'] = $store_type_id; 
		$data['js'] = array('store_type.js');
		$data['init'] = array('STORE.add()');
		$data['editData'] = $this->this_model->getStore($d_id);
		$data['FormAction'] = base_url().$this->url.'edit/'.$store_type_id;
		if($this->input->post()){
			$responce = $this->this_model->updateStore($d_id,$this->input->post());
			if($responce){
				$this->utility->setFlashMessage('success','Store type updated successfully');
				redirect(base_url().$this->url);
			}else{
				$this->utility->setFlashMessage('danger','Somthing went Wrong');
				redirect(base_url().$this->url);
			}
		
		}
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function checkExist(){
		if ($this->input->is_ajax_request()) {
   			$cnt = $this->this_model->checkNameExist($this->input->post());
   			if($cnt > 0){
   				echo 'false';
   				die();
   			} 
   			echo 'true';
		}
	}



}
