<?php 
class Smsgateway extends Admin_Controller
{
	
	function __construct(){
		parent::__construct();
		$vendor_id = $this->session->userdata['vendor_admin_id'];
		$this->load->model('Smsgateway_model','this_model');
	}

	public function index(){
		// dd($_SESSION);die;
		$data['paymentMethods'] = $this->this_model->get_sms_gateway();
		// dd($data['paymentMethods']);
		$this->load->view('smsgateway/list',$data);
	}

	public function add_sms_gateway(){
		if(isset($_GET['id']) && $_GET['id'] != ''){
			$id = $_GET['id'];
			$data['result'] = $this->this_model->getSmsGetway($id);
		}
		// dd($data['result']);
		$this->load->view('smsgateway/add',$data);
	}

	public function add_update_sms_gateway()
	{
		$this->this_model->add_update_sms_gateway($this->input->post());

	}

	public function check_publish_key(){
		if($this->input->post()){
			$result = $this->this_model->check_publish_key($this->input->post());
			if(count($result) > 0){
				echo "false";
			}else{
				echo "true";
			}
		}
	}

	public function check_secret_key(){
		if($this->input->post()){
			$result = $this->this_model->check_secret_key($this->input->post());
			if(count($result) > 0){
				echo "false";
			}else{
				echo "true";
			}
		}
	}

	public function status_change()
	{
		$id = $_GET['id'];
		$this->this_model->smsgateway_change_status($id);
		// lq();
	}

	public function delete_sms_gateway()
	{
		$this->this_model->delete_sms_gateway();
	}

}
?>