<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PushNotification extends Admin_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('pushNotification_model','this_model');
        $this->load->model('banners_model','banners_model');
	}

	public function index()
	{
		$data['js'] = array('pushNotification.js');
        $data['FormAction'] = base_url().'pushNotification/callNotification';
		$data['branchList'] = $this->banners_model->getBranch();
		$this->load->view('pushNotification',$data);
	}

    public function get_product_list(){
		if($this->input->post()){
			$product = $this->this_model->get_product_list($this->input->post());
			$product_list = '<option value="">Select product</option>';
			foreach ($product as $key => $value) {
				$product_list .='<option value='.$value->id.'>'.$value->name.'</option>';
			}
			echo json_encode(['category_list'=>$category_list,'product_list'=>$product_list]);
		}
	}

    public function callNotification(){
        // dd($this->input->post());
        $vendor_id = $this->session->userdata('vendor_admin_id');
        $androidDevice = [];
        $iosDevice = [];
        $device =  $this->this_model->getUserDevice();
        foreach ($device as $key => $value) {
            if($value->type == 'i' || $value->type == 'I'){
                array_push($iosDevice,$value->device_id);
            }
            if($value->type == 'a' || $value->type == 'A'){
                array_push($androidDevice,$value->device_id);
            }
        }
        $result = $this->this_model->getNotificationKey();
        // dd($iosDevice);  

        // if(!empty($iosDevice)){
        //     foreach ($iosDevice as $key => $value) {
        //         $deviceToken['device_id'] = $value;
        //         $msg['message'] = $this->input->post('message');
        //         # code...
        //        $response =  $this->utility->notificationForIOS($deviceToken, $msg, $status=NULL, $unread=NULL, $key=NULL, $result);
        //         // dd($response);
        //     } 
        // }
        if(!empty($androidDevice)){
            // $message['message'] = $this->input->post('message');
            // foreach ($androidDevice as $key => $value) {
                $deviceToken['device_id'] = $value;
            //     $message = $this->input->post('message');
                
            $this->utility->notificationForAndroid($deviceToken, 'asdfsafds', $jsonDat='', $type=NULL, $unread=NULL, $key=NULL, $result);
            // }
            // $body = [
            //     'title'=>$this->input->post('title'),
            //     'message'=>$this->input->post('message')
            // ];
            // $response = $this->utility->PushNotification($deviceToken, $body, $result,$this->input->post(),$vendor_id);
            dd($response);
        }
    }
    

}