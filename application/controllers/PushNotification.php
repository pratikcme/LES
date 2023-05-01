<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PushNotification extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pushNotification_model', 'this_model');
        $this->load->model('banners_model', 'banners_model');
        $this->url = 'pushNotification';
    }

    public function index()
    {
        $data['js'] = array('pushNotification.js');
        $data['FormAction'] = base_url() . 'pushNotification/callNotification';
        $data['branchList'] = $this->banners_model->getBranch();
        $this->load->view('pushNotification', $data);
    }

    public function get_product_list()
    {
        if ($this->input->post()) {
            $product = $this->this_model->get_product_list($this->input->post());
            $product_list = '<option value="">Select product</option>';
            foreach ($product as $key => $value) {
                $product_list .= '<option value=' . $value->id . '>' . $value->name . '</option>';
            }
            echo json_encode(['category_list' => $category_list, 'product_list' => $product_list]);
        }
    }

    public function callNotification()
    {
        // dd($this->input->post());
        $vendor_id = $this->session->userdata('vendor_admin_id');

        $androidDeviceToken = [];
        $iosDevice = [];
        $device =  $this->this_model->getUserDevice();

        foreach ($device as $key => $value) {
            if ($value->type == 'i' || $value->type == 'I') {
                array_push($iosDevice, $value->token);
            }
            if ($value->type == 'a' || $value->type == 'A') {
                array_push($androidDeviceToken, $value->token);
            }
        }
        $result = $this->this_model->getNotificationKey();
        if (!empty($iosDevice)) {

            foreach ($iosDevice as $key => $value) {
                $deviceToken['device_id'] = $value;
                $msg['message'] = $this->input->post('message');
                $respon =  $this->utility->PushNotification($deviceToken, $msg, $status = NULL, $unread = NULL, $key = NULL, $result, $this->input->post(), $vendor_id);
            }
        }
        if (!empty($androidDeviceToken)) {

            $message['message'] = $this->input->post('message');
            $respon = $this->utility->pushNotificationAndroid($androidDeviceToken, $this->input->post(), $result, $vendor_id);
        }
        if ($respon) {
            $this->utility->setFlashMessage('success', "Notification send successfully");
            redirect(base_url() . $this->url);
        }
    }
}
