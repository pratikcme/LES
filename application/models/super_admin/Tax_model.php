<?php

class Tax_model extends My_model
{

    public function getTax($id = '')
    {
        if ($id != '') {
            $data['where'] = ['id' => $id];
        }

        $data['table'] = TABLE_TAX;
        $data['select'] = ['*'];
        $data['order'] = 'id desc';
        return $this->selectRecords($data);
    }


    public function getTaxType($id = '')
    {
        if ($id != '') {
            $data['where'] = ['id' => $id];
        }

        $data['table'] = TABLE_TAX_TYPE . ' as tt';
        $data['select'] = ['*'];
        $data['join'] = [
            TABLE_TAX . ' as t' => ['tt.tax_id = t.id', 'LEFT']
        ];
        $data['order'] = 'id desc';
        return $this->selectRecords($data);
    }




    public function store($postData)
    {

        $data['table'] = TABLE_TAX;
        $data['insert']['tax_name'] = $postData['tax_name'];
        $data['insert']['created_at'] = date('Y-m-d H:i:s');
        $this->insertRecord($data);
    }

    public function update($id, $postData)
    {


        $updateArray = [
            'tax_name' =>    $postData['tax_name'],
        ];

        $data['table'] = TABLE_TAX;
        $data['update'] = $updateArray;
        $data['where'] = ['id' => $id];

        return $this->updateRecords($data);
        // lq();
    }


    public function delete($postdata)
    {
        $id = $this->utility->decode($postdata['id']);
        $data['table'] = TABLE_TAX;
        $data['where'] = ['id' => $id];

        $res = $this->deleteRecords($data);
        if ($res > 0) {
            $this->utility->setFlashMessage('danger', 'tax Deleted successfully');
            return 1;
        }
    }


    public function storeTaxType($postData)
    {


        foreach ($postData['tax_type'] as $key => $value) {

            $data['table'] = TABLE_TAX_TYPE;
            $data['insert']['tax_id'] = $postData['tax_id'];
            $data['insert']['tax_type'] = $value;
            $data['insert']['percentage'] = $postData['percentage'][$key];
            $this->insertRecord($data);
        }
        return true;
    }


    public function updateTaxType($id, $postData)
    {
        $updateArray = [
            'tax_type' =>    $postData['tax_type'],
            'percentage' =>    $postData['percentage'],
        ];

        $data['table'] = TABLE_TAX_TYPE;
        $data['update'] = $updateArray;
        $data['where'] = ['id' => $id];

        return $this->updateRecords($data);
    }

    public function deleteTaxType($postdata)
    {
        $id = $this->utility->decode($postdata['id']);
        $data['table'] = TABLE_TAX_TYPE;
        $data['where'] = ['id' => $id];

        $res = $this->deleteRecords($data);
        if ($res > 0) {
            $this->utility->setFlashMessage('danger', 'tax type Deleted successfully');
            return 1;
        }
    }
}
