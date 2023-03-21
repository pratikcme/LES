<?php

Class Store_type_model extends My_model{

	public function getStore($id = ''){
		if($id != ''){
			$data['where'] = ['id'=>$id];
		}
		$data['table'] = TABLE_STORE_TYPE;
		$data['select'] = ['*'];
		$data['order'] = 'id desc';
		return $this->selectRecords($data);
	}

    public function add($postData){
        $data['table'] = TABLE_STORE_TYPE;
        $data['insert']['name'] = $postData['name'];
        $this->insertRecord($data);
    }
	

	public function updateStore($store_type_id,$postData){
		$updateArray = [
			'name'=>	$postData['name'],
		]; 	
		$data['table'] = TABLE_STORE_TYPE;
		$data['update'] = $updateArray;
		$data['where'] = ['id'=>$store_type_id];
		return $this->updateRecords($data);
		lq();
	}

    public function delete($id){
        $data['table'] = TABLE_STORE_TYPE;
        $data['where']['id'] = $id;
        return $this->deleteRecords($data);
    }

    public function checkNameExist($postData){
        $id = $postData['id'];
        if($id != ''){
            $data['where']['id !='] = $this->utility->safe_b64decode($id);
        }
        $data['where']['name'] = $postData['name'];
        $data['table'] = TABLE_STORE_TYPE;
        $data['select'] = ['*'];
        return $this->countRecords($data);

    }

}

?>