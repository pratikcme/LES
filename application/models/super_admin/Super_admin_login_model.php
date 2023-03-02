<?php

class Super_admin_login_model extends My_model
{
	
	function superAdminLogin($postData)
	{
		$data['table'] = TABLE_SUPER_ADMIN;
		$data['select'] = ['*'];
		$data['where']['email'] = $postData['loginemail'];
        $data['where']['password'] = md5($postData['loginpassword']);
		$res =  $this->selectRecords($data); 
        if(!empty($res)){
            $login_data = array(        
                'super_admin' => $res[0]->id,
                'id' => $res[0]->id,
                'name' => $res[0]->company_name,
                'email' => $res[0]->email,
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