<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Web_setting extends Admin_Controller
{
    function __construct()
    {

        parent::__construct();
        $vendor_id = $this->session->userdata['id'];
        $this->load->model('package_model', 'this_model');
    }

    public function fav_image()
    {
        echo "fav_image";
    }

    public function web_logo()
    {
        echo "web_logo";
    }
}
