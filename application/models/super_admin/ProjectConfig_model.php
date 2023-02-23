<?php

Class ProjectConfig_model extends My_model{

	public function getConfigData($id =''){
		if($id != ''){
			$data['where']['f.id'] = $id;
		}
		$data['table'] = TABLE_FIREBASE .' as f';
		$data['join']  = [ADMIN . ' v'=>['v.id=f.vendor_id','LEFT']];
		$data['select'] = ['f.*','v.server_name'];
		$data['order'] = 'f.id DESC';
		return $this->selectFromJoin($data);
		// lq();
	}

	public function updateConfig($id,$postData){

		$data['update']['user_firebase_key'] = trim($postData['user_firebase_key']);
		$data['update']['staff_firebase_key'] = trim($postData['staff_firebase_key']);
		$data['update']['delivery_firebase_key'] = trim($postData['delivery_firebase_key']);
		$data['update']['key_id'] = $postData['key_id'];
		$data['update']['team_id'] = $postData['team_id'];
		$data['update']['user_bandle_id'] = $postData['user_bandle_id'];
		$data['update']['staff_bandle_id'] = $postData['staff_bandle_id'];
		$data['update']['admin_bandle_id'] = trim($postData['admin_bandle_id']);
		$data['update']['delivery_bandle_id'] = $postData['delivery_bandle_id'];
		$data['update']['facebook_client_id'] = $postData['facebook_client_id'];
		$data['update']['facebook_secret_id'] = $postData['facebook_secret_id'];
		$data['update']['google_client_id'] = $postData['google_client_id'];
		$data['update']['google_secret_id'] = $postData['google_secret_id'];
		$data['update']['android_app_link'] = $postData['android_app_link'];
		$data['update']['ios_app_link'] = $postData['ios_app_link'];
		$data['update']['contact_number'] = $postData['contact_number'];
		$data['update']['contact_email'] = $postData['contact_email'];
		$data['update']['contact_us_address'] = $postData['contact_us_address'];
		$data['update']['facebook_link'] = $postData['facebook_link'];
		$data['update']['instagram_link'] = $postData['instagram_link'];
		$data['update']['twitter_link'] = $postData['twitter_link'];
		$data['update']['google_plus_link'] = $postData['google_plus_link'];
		$data['update']['p8_file'] = $postData['p8_file'];
		$data['update']['firebase_url'] = trim($postData['firebase_url']);
		$data['update']['firebase_token'] = trim($postData['firebase_token']);
		$data['update']['firebase_node'] = trim($postData['firebase_node']);
		$data['update']['updated_at'] = D_T;
		$data['where'] = ['id' => $id];
		$data['table'] = TABLE_FIREBASE;
		$result = $this->updateRecords($data);
		// lq();
		return $result;
	}


}

?>