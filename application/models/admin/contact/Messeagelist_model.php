<?php

class Messeagelist_model extends My_model
{

  function __construct()
  {
    $this->vendor_id = $this->session->userdata('vendor_admin_id');
  }

  public function selectMessageList()
  {
    $this->db->select('*');
    $this->db->from(TABLE_CONTACT_US);
    $this->db->where('vendor_id', $this->vendor_id);
    $this->db->order_by("id", "DESC");
    $query = $this->db->get();
    return $query->result();
  }
  
  public function getMessage($id){
    $data['table'] = TABLE_CONTACT_US;
    $data['select'] = ['message'];
    $data['where'] = ['id'=>$id];
    return $this->selectRecords($data);
  }

  public function deleteRecord($id)
  {
    // change
    $data['table'] = TABLE_CONTACT_US;
    $data['where'] = ['id' => $id];

    $res = $this->deleteRecords($data, true);
    if ($res) {
      return 1;
    } else {
      return 0;
    }
  }
}
