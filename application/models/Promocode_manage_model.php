<?php
class Promocode_manage_model extends My_model{

    function __construct(){
     $this->vendor_id = $this->session->userdata('vendor_admin_id');
     $this->branch_id = $this->session->userdata('id');
    }


    public function allData($id = ''){
         
        if($id != ''){
            $data['where']['p.id'] = $id;
        }
        $data['table'] = TABLE_PROMOCODE.' as p';
        $data['select'] = ['p.*','b.name as branch_name'];
        $data['join'] = ['branch as b'=>['b.id = p.branch_id','LEFT']];
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
     dd($postData);
        $insert = array(
            'branch_id'=>$postData['branch'],
            'name' => $postData['name'],
            'percentage' => $postData['percentage'],
            'max_use' => $postData['max_use'],
            'max_cart' => $postData['max_cart'],
            'min_cart' => $postData['min_cart'],
            'notes' => $postData['notes'],
            'start_date' => date('Y-m-d',strtotime($postData['start_date'])),
            'end_date' => date('Y-m-d',strtotime($postData['end_date'])),
            'status' => '1',
            'dt_created' => DATE_TIME,
            'dt_updated' => DATE_TIME
        );
        $data['table'] = TABLE_PROMOCODE;
        $data['insert'] = $insert;
        
    
        $res = $this->insertRecord($data); 
        // echo $this->db->last_query();exit;
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
            'name' => $postData['name'],
            'percentage' => $postData['percentage'],
            'max_use' => $postData['max_use'],
            'max_cart' => $postData['max_cart'],
            'min_cart' => $postData['min_cart'],
            'notes' => $postData['notes'],
            'start_date' => date('Y-m-d',strtotime($postData['start_date'])),
            'end_date' => date('Y-m-d',strtotime($postData['end_date'])),
            'dt_updated' => DATE_TIME
        );
        $data['table'] = TABLE_PROMOCODE;
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
       
        $data['table'] = TABLE_PROMOCODE;
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
       
           $data['table'] = TABLE_PROMOCODE;
           $data['where']['id'] = $value;
           $re = $this->deleteRecords($data);
           
       }
       if($re){
        echo json_encode(['status'=>1]);
    }
        
    }

    public function promocode_change_status($id)
    {

        $id = $this->utility->decode($id);

        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->where('status', '1');
        $this->db->from('promocode');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $data = array('status' => '0');
            $this->db->where('id', $id);
            $this->db->update('promocode', $data);
        } else {
            $data = array('status' => '1');
            $this->db->where('id', $id);
            $this->db->update('promocode', $data);
        }

        ob_get_clean();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(['status' => 1]);
        exit;
    }
 
}

?>