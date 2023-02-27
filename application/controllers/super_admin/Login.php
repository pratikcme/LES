<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

	function __construct(){
		parent::__construct();
		// $this->load->model('super_admin/login_model','this_model');
	}

	public function index()
	{
        echo '1';die;
		$data['page'] = 'super_admin/dashboard';
		$data['totalVendor'] = $this->this_model->getVendorCount();
		$data['totalBranch'] = $this->this_model->getBranchCount();
		$data['totalActiveUser'] = $this->this_model->getActiveUserCount();
		$data['totalCancled'] = $this->this_model->getTotalCancled();
		$data['totalSales'] = $this->this_model->getTotalSales();
		$this->load->view(SUPER_ADMIN_LAYOUT,$data);
	}

	public function logout(){
		$this->session->unset_userdata('validSuperAdmin');
		redirect(base_url().'admin');
	}



}
