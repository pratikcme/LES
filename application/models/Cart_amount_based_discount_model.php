<?php

class Cart_amount_based_discount_model extends My_model{

    function __construct(){
     $this->vendor_id = $this->session->userdata('vendor_admin_id');
     $this->branch_id = $this->session->userdata('id');
    }


    public function allData($id = ''){
     
        if($id != ''){
            $data['where']['sbd.id'] = $id;
        }
        $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT.' as sbd';
        $data['select'] = ['sbd.*','b.name as branch_name'];
        $data['join'] = ['branch as b'=>['b.id = sbd.branch_id','LEFT']];
        $data['where']['b.vendor_id'] = $this->vendor_id;
        $data['order'] = 'id desc';
        return $this->selectFromJoin($data);
    }


    public function getBranch(){
        $data['table'] = 'branch';
        $data['select'] = ['*'];
        $data['where'] = ['vendor_id'=>$this->vendor_id,'status'=>'1'];
        return  $this->selectRecords($data);
    }

 


  ## Add Update ##
    public function addRecord($postData){
        // dd($postData);
        $insert = array(
            'branch_id'=>$this->branch_id,
            'cart_amount' => $postData['cart_amount'],
            'discount_percentage' => $postData['discount_percentage'],
            'dt_created' => DATE_TIME,
            'dt_updated' => DATE_TIME
        );
        $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT;
        $data['insert'] = $insert;
        
    
        $res = $this->insertRecord($data); 
        if($res){
            $jsone_response['status'] = 'success';
            $jsone_response['message'] = 'Data added success!!!';
        }else{
            $jsone_response['status'] = 'danger';
            $jsone_response['message'] = DEFAULT_MESSAGE;
        }   
    
         return $jsone_response;
    }


    public function updateRecord($postData){
         $update = array(
            'cart_amount' => $postData['cart_amount'],
            'discount_percentage' => $postData['discount_percentage'],
            'dt_updated' => DATE_TIME
        );
        $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT;
        $data['update'] = $update;
        $data['where'] = ['id'=>$this->id];
        $res = $this->updateRecords($data);
        if($res){
            $jsone_response['status'] = 'success';
            $jsone_response['message'] = 'Data updated success!!!';
        }else{
            $jsone_response['status'] = 'danger';
            $jsone_response['message'] = DEFAULT_MESSAGE;
        }   
    
         return $jsone_response;

        
    }

    public function removeRecord($id){
       
        $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT;
        $data['where']['id'] = $id;
        $return =  $this->deleteRecords($data);
           
        $jsone_response['status'] = 'success';
        $jsone_response['message'] = 'Data updated success!!!';
        return $jsone_response;
            
    }


  ## Multi Delete City ##
    public function multi_delete()
    {
        $id = $_GET['ids'];
        $re = '' ;
        $path1 = 'public/images/'.$this->folder.'offer_image';
        foreach ($id as $value) {
       
           $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT;
           $data['where']['id'] = $value;
           $re = $this->deleteRecords($data);
           
       }
       if($re){
        echo json_encode(['status'=>1]);
    }
        
    }

    public function checkAmountExist($postData){
        // dd($postData);
        $data['table'] = TABLE_SHOPPING_BASED_DISCOUNT;
        $data['where']['cart_amount'] = $postData['cart_amount'];
        $data['where']['branch_id'] = $this->branch_id;
        if(isset($postData['update_id']) && $postData['update_id'] != ''){
            $data['where']['id!='] = $this->utility->decode($postData['update_id']);
        }
        $re = $this->countRecords($data);
        if($re > 0){
            return "false";
        }else{
            return "true";
        }
    }

    

    public function cart_base_amt_discount_status($id)
    {

        $id = $this->utility->decode($id);

        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->where('status', '1');
        $this->db->from(TABLE_SHOPPING_BASED_DISCOUNT);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $data = array('status' => '0');
            $this->db->where('id', $id);
            $this->db->update(TABLE_SHOPPING_BASED_DISCOUNT, $data);
        } else {
            $data = array('status' => '1');
            $this->db->where('id', $id);
            $this->db->update(TABLE_SHOPPING_BASED_DISCOUNT, $data);
        }

        ob_get_clean();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(['status' => 1]);
        exit;
    }
 
}

?>