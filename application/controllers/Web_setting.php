<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Web_setting extends Admin_Controller
{
    function __construct()
    {

        parent::__construct();
        require_once APPPATH . 'config/tablenames_constants.php';
        $this->load->model('vendor_model', 'vendor_model');
    }

    public function fav_image()
    {
        $email = $this->session->userdata('email');
        $data['app_result'] = $this->vendor_model->vendorByIdEmail($email);
        $this->load->view('web_setting/fav_image', $data);
    }

    public function web_logo()
    {
        // $this->load->view('profile', $data);
    }
}
