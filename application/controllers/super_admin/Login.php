<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

	function __construct(){
		parent::__construct();
		// $this->load->model('super_admin/login_model','this_model');
	}

	public function index()
	{
		$this->load->view('super_admin/login');
	}

	public function logout(){
		$this->session->unset_userdata('validSuperAdmin');
		redirect(base_url().'admin');
	}



}
