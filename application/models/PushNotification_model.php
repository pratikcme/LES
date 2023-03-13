<?php 

class PushNotification_model extends My_model
{
    function __construct(){
        $this->vendor_id = $this->session->userdata('vendor_admin_id');
    }

    public function get_product_list($postData){
        $data['table'] = TABLE_PRODUCT;
        $data['select'] = ['*'];
        $data['where']['branch_id'] = $postData['branch_id'];
        $data['where']['category_id'] = $postData['category_id'];
        $data['where']['status!='] = '9';
        return $this->selectRecords($data);
    }

    public function getUserDevice(){
        $data['select'] = ['d.*','u.vendor_id'];
        $data['table'] = TABLE_USER .' as u';
        $data['join'] = [TABLE_DEVICE.' as d' =>['u.id=d.user_id','INNER']];
        $data['where'] = ['u.status !='=>'9'];
        return $this->selectFromJoin($data);

    }
}
?>