<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('super_admin/super_admin_login_model','this_model');
	}

	public function index()
	{
        $data['formAction'] = base_url().'super_admin/login';
        if($this->input->post()){
            $this->this_model->superAdminLogin($this->input->post());
            dd($this->input->post());
        }
		$this->load->view('super_admin/login',$data);
	}

	public function logout(){
		$this->session->unset_userdata('validSuperAdmin');
		redirect(base_url().'admin');
	}



}
