<?php

Class Branches_model extends My_model{

	public function getBranch($branch_id = '',$vendor_id=''){
		if($branch_id != ''){
			$data['where'] = ['id'=>$branch_id];
		}
		if($vendor_id != ''){
			$data['where'] = ['vendor_id'=>$vendor_id];
		}

		$data['table'] = TABLE_BRANCH;
		$data['select'] = ['*'];
		$data['order'] = 'id desc';
		return $this->selectRecords($data);
	}

	public function change_status($branch_id){
		$id = $this->utility->safe_b64decode($branch_id);
		$data['table'] = TABLE_BRANCH;
		$data['select'] = ['*'];
		$data['where'] = ['id'=>$id];
		$record = $this->selectRecords($data);
		// dd($record);
		$status='';
		if(!empty($record)){
			if($record[0]->status == '1'){
				$status = '0';
			}else{
				$status = '1';
			}
		}
		unset($data);
		$data['table'] = TABLE_BRANCH;
		$data['where'] = ['id'=>$id];
		$data['update'] = ['status'=>$status];
		return $this->updateRecords($data);
	}

	public function updateBranch($id,$postData){
		dd($postData);
		$updateArray = [
			'email'=>	$postData['email'],
			'approved_branch'=>	$postData['approved'],
			'display_price_with_gst'=>	$postData['display_price_with_gst'],
			'webTitle'=>	$postData['webTitle'],
			'android_version'=>	$postData['android_version'],
			'ios_version'=>	$postData['ios_version'],
			'android_isforce'=>	$postData['android_isforce'],
			'ios_isforce'=>	$postData['ios_isforce'],
			'dt_updated'=> strtotime(DATE_TIME)
		]; 

		$data['table'] = TABLE_BRANCH;
		$data['update'] = $updateArray;
		$data['where'] = ['id'=>$id];
		return $this->updateRecords($data);
	}
}

?>