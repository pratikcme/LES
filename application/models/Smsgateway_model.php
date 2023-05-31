<?php 

class Smsgateway_model extends My_model
{
	
	function __construct(){
		$this->vendor_id = $this->session->userdata['vendor_admin_id'];
	}

	public function get_sms_gateway(){
		$data['table'] = SMSGATEWAY;
		$data['select'] = ['*'];
		return $this->selectRecords($data);

	}

	public function getSmsGetway($id=''){
        if($id != ''){
            $data['where'] = ['id'=>$this->utility->safe_b64decode($id)];
        }
		$data['select'] = ['*'];
		$data['table'] = SMSGATEWAY;
		$return = $this->selectRecords($data,true);
		return $return[0];
	}

	public function add_update_sms_gateway($postData){

		if(!empty($postData['id'])){
			$updateSmsGateway = [
				'sms_gateway_name' => trim($postData['sms_gateway_name']),
				'sid' => trim($postData['sid']),
				'auth_token' => trim($postData['auth_token']),
				'twillo_number' => trim($postData['twillo_number']),
				'dt_updated' => date('Y-m-d h:i:s'),
			];
			$data['update'] = $updateSmsGateway;
			$data['table'] = SMSGATEWAY;
			$data['where'] = ['id' => $postData['id']];
			$this->updateRecords($data);
			$this->session->set_flashdata('msg', 'Sms gateway has been updated successfully');
            redirect(base_url() . 'smsgateway');
            exit();

		}else{
			$insertSmsGateway = [
                'vendor_id' => $this->vendor_id,
				'sms_gateway_name' => $postData['sms_gateway_name'],
				'sid' => trim($postData['sid']),
				'auth_token' => trim($postData['auth_token']),
				'twillo_number' => trim($postData['twillo_number']),
				'dt_added' => date('Y-m-d h:i:s'),
			];

			$data['insert'] = $insertSmsGateway;
			$data['table'] = SMSGATEWAY;
			$this->insertRecord($data);
			$this->session->set_flashdata('msg', 'Sms gateway has been added successfully');
            redirect(base_url() . 'smsgateway');
            exit();
		}
		
	}

    public function smsgateway_change_status($id){
        
        $data['table'] = SMSGATEWAY;
        $data['select'] = ['*'];
        $data['where'] = ['vendor_id' => $this->vendor_id,'id'=>$this->utility->decode($id)];
        $SmsGateWayData = $this->selectRecords($data);
        // lq();
        $status = '0';
        if(!empty($SmsGateWayData)){
        	if($SmsGateWayData[0]->status == '1'){
        		$status = '0';
        	}else{
        		$status = '1';
        	}
        }
    	$data = array('status'=>$status,'dt_updated'=> date('Y-m-d H:i:s'));
        $this->db->update(SMSGATEWAY,$data,['id' => $this->utility->decode($id)]);
        ob_get_clean();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(['status'=>1]);
        exit;
    }

    public function delete_sms_gateway()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete(SMSGATEWAY);

        ob_get_clean();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(['status'=>1]);
        exit;
    }

}
?>