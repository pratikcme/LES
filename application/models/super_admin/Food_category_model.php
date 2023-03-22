<?php

Class Food_category_model extends My_model{

    public function getStoreType(){
        $data['table'] = TABLE_STORE_TYPE;
        $data['select'] = ['*'];
        return $this->selectRecords($data);
    }

    public function getFoodCategory(){
        $data['table'] = TABLE_FOOD_CATEGORY;
        $data['select'] = ['store_type_id'];
        $re =  $this->selectRecords($data,true);
        return array_column($re,'store_type_id');
    }

    public function addFoodCategory($postData){
        // dd($postData);
        $data['table'] = TABLE_FOOD_CATEGORY;
        $this->db->where('store_type_id!=','');
        $this->db->delete(TABLE_FOOD_CATEGORY);
        // lq();
        foreach ($postData['store_type'] as $key => $value) {
            $data['insert']['store_type_id'] = $value;
            $data['insert']['dt_created'] = DATE_TIME;
            $this->insertRecord($data);
        }
        return  true;
    }

}

?>