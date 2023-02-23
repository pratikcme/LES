<?php

class Profile_model extends My_model
{
	
	function getProfile()
	{
		$data['table'] = TABLE_SUPER_ADMIN;
		$data['select'] = ['*'];
		$data['where']['id'] = $this->session->userdata['validSuperAdmin']['id'];
		return $this->selectRecords($data); 	
	}

	public function UpdateProfile($postData){
		$data['table'] = TABLE_SUPER_ADMIN;
		$data['where']['id'] = $this->session->userdata['validSuperAdmin']['id'];
		$data['update']['company_name'] = $postData['company_name'];
		$data['update']['email'] = $postData['email'];
		$data['updated_at'] = DATE_TIME;
		$result = $this->updateRecords($data);
		if($result){
			return ['success','Your password has been changed'];
		}else{
			return ['danger','Somthing went wrong'];
		}
	}

	public function UpdatePassword($postData){
		$data['table'] = TABLE_SUPER_ADMIN;
		$data['select'] = ['*'];
		$data['where']['id'] = $this->session->userdata['validSuperAdmin']['id'];
		$re = $this->selectRecords($data);
		unset($data);
		if($re[0]->password == md5($postData['password'])){
			if($postData['new_password'] == $postData['confirm_password']){
				$data['table'] = TABLE_SUPER_ADMIN;
				$data['where']['id'] = $this->session->userdata['validSuperAdmin']['id'];
				$data['update']['password'] = md5($postData['new_password']);
				$data['updated_at'] = DATE_TIME;
				$result = $this->updateRecords($data);
				if($result){
					return ['success','Your password has been changed'];
				}else{
					return ['danger','Somthing went wrong'];
				}
			}else{
				return ['danger','Password Does not match'];	
			}
		}else{
			return ['danger','Please enter your correct previous password'];
		}
	}	
}

?>