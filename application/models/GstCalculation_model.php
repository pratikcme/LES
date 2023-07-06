<?php
class GstCalculation_model extends My_model
{

    public function getProduct()
    {

        $data['select'] = ['*'];
        $data['table'] = TABLE_PRODUCT;
        return $this->selectRecords($data);
    }
    public function getProduct_weight($id)
    {
        $data['select'] = ['*'];
        $data['table'] = TABLE_PRODUCT_WEIGHT;
        $data['where'] = ['product_id' => $id];
        return $this->selectRecords($data);
    }

    public function change_price_of_discount_price_and_base_price($postData)
    {
        $data['update']['without_gst_price'] =  $postData['without_gst_price'];
        $data['update']['discount_price'] =  $postData['discounted_price'];
        $data['where'] =  ['id' => $postData['id'], 'product_id' => $postData['product_id']];
        $data['table'] = TABLE_PRODUCT_WEIGHT;
        $this->updateRecords($data);
    }
}
