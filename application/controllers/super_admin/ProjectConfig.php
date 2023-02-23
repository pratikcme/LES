<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectConfig extends Super_Admin_Controller{

	function __construct(){
		parent::__construct();
		$this->url = 'super_admin/projectConfig/';
		$this->load->model('super_admin/projectConfig_model','this_model');
		$this->load->model('super_admin/vendors_model','vendors_model');
	}

	public function index()
	{
		
		$data['page'] = 'super_admin/projectConfig/list';
		$data['getVendors'] = $this->vendors_model->getVendors();
		$data['getConfig'] = $this->this_model->getConfigData();
		// dd($data['getConfig']);
		// if($this->input->post()){
		// 	// dd($this->input->post());
		// 	$vendor_id = $this->input->post('vendor_id');
		// 	$data['getBranches'] = $this->this_model->getBranch('',$vendor_id);
		// 	$data['vendor_id'] = $vendor_id;
		// }
		$data['js'] = array('projectConfig.js');
		$data['init'] = ['PROJECTCONFIG.init()'];
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function change_status($branch_id){
		$responce = $this->this_model->change_status($branch_id);
		if($responce){
			$this->utility->setFlashMessage('success','Branche status change successfully');
		}
		redirect(base_url().$this->url);
	}

	public function edit($id=''){
		$d_id = $this->utility->safe_b64decode($id);
		$data['page'] = 'super_admin/projectConfig/edit';
		$data['js'] = array('projectConfig.js');
		$data['init'] = array('PROJECTCONFIG.init()');
		$data['editData'] = $this->this_model->getConfigData($d_id);
		$data['FormAction'] = base_url().$this->url.'edit/'.$id;
		if($this->input->post()){
			// dd($this->input->post());
			$responce = $this->this_model->updateConfig($d_id,$this->input->post());
			if($responce){
				$this->utility->setFlashMessage('success','Record updated successfully');
				redirect(base_url().$this->url);
			}else{
				$this->utility->setFlashMessage('danger',DEFAULT_MESSAGE);
				redirect(base_url().$this->url);
			}
		
		}
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
		



	}



}
