<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Super_Admin_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('super_admin/profile_model','this_model');
  }
  
  public function index()
  {
    $data['page'] = 'super_admin/profile';
    $data['js'] = array('profile.js');
    $data['init'] = array('USERPROFILE.init()');
    $data['FormAction'] = base_url().'super_admin/profile/update';
    $data['profile'] = $this->this_model->getProfile();
    $this->load->view(SUPER_ADMIN_LAYOUT,$data);
  }

  public function update()
  {
    if($this->input->post()){
       $response = $this->this_model->UpdateProfile($this->input->post());
       $this->utility->setFlashMessage($response[0],$response[1]);
       redirect(base_url().'super_admin/profile');
    }
  }

  public function change_password(){
    $data['page'] = 'super_admin/change_password';
    $data['js'] = array('profile.js');
    $data['init'] = array('USERPROFILE.init()');
    $data['FormAction'] = base_url().'super_admin/profile/change_password';
    if($this->input->post()){
      $response = $this->this_model->UpdatePassword($this->input->post());
      $this->utility->setFlashMessage($response[0],$response[1]);
      redirect(base_url().'super_admin/profile/change_password');
    }
    $data['profile'] = $this->this_model->getProfile();
    $this->load->view(SUPER_ADMIN_LAYOUT,$data);
  }

}
