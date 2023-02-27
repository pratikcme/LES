<?php

class Super_admin_login_model extends My_model
{
	
	function superAdminLogin($postData)
	{
		$data['table'] = TABLE_SUPER_ADMIN;
		$data['select'] = ['*'];
		$data['where']['email'] = $postData['loginemail'];
        $data['where']['password'] = md5($postData['loginpassword']);
		$res =  $this->selectRecords($data,true); 
        if(!empty($res)){
            $login_data = array(        
                'super_admin' => $res['id'],
                'id' => $res['id'],
                'name' => $res['company_name'],
                'email' => $res['email'],
                'super_admin' => TRUE
            );
            $this->session->set_userdata(['validSuperAdmin'=>$login_data]);
            redirect(base_url().'super_admin/dashboard');
        }else{
            $this->session->set_flashdata('msg', 'Invalid email or password');
            redirect(base_url().'super_admin/login');
        }
    }
}

?>