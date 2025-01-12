<?php

class Delivery_charge_model extends My_model
{
    function __construct()
    {
        $this->load->model('common_model');
        $re = $this->common_model->getExistingBranchId();
        $this->branch_id = $re[0]->id;
        $this->vendor_id = $this->session->userdata('vendor_admin_id');
    }

    public function getDeliveryCharegeData()
    {
        $data['table'] = 'delivery_charge';
        $data['select'] = ['*'];
        $data['where'] = ['vendor_id' => $this->vendor_id];
        $data['order'] = 'id DESC';
        return $this->selectRecords($data);
    }


    public function delivery_charge_Add()
    {
        $date = DATE_TIME;
        // print_r($_POST);exit;
        $id = $_POST['id'];
        if (isset($_POST['submit'])) {
            /* Delivery charge Update */
            if ($id != '') {
                // echo 1;exit;
                $start = $_POST['start_range'];
                $end = $_POST['end_range'];
                $price = $_POST['price'];
                $data = array(
                    'vendor_id' => $this->vendor_id,
                    'start_range' => $start,
                    'end_range' => $end,

                    'dt_updated' => $date,
                );
                $this->db->where('id', $id);
                $this->db->update('delivery_charge', $data);
                $this->session->set_flashdata('msg', 'Delivery charge has been updated successfully');
                redirect(base_url() . 'delivery_charge/delivery_charge');
                exit();
            } else {
                // echo 2;
                $b = $this->input->post('start_range');
                $c = $this->input->post('end_range');
                $i = 0;
                // exit;   
                // foreach ($a as $val) {
                // echo $val;
                $end = $c;
                $start = $b;
                if ($end != '') {
                    $insertion = array(
                        'vendor_id' => $this->vendor_id,
                        'start_range' => $start,
                        'end_range' => $end,
                        'dt_updated' => $date,
                        'dt_added' => $date
                    );
                    $data['insert'] = $insertion;
                    $data['table'] = 'delivery_charge';
                    $response = $this->insertRecord($data);
                    $this->session->set_flashdata('msg', 'Delivery charge has been added successfully');
                }
                $i++;
                // }
                // exit;
                return $response;
            }
        }
    }

    public function addVariantPriceRange($postData)
    {
        // $id = $postData->id;

        $data['insert'] = [
            'start_price' => $postData['start_price'],
            'end_price' => $postData['end_price'],
            'delivery_charge' => $postData['delivery_charge'],
            'delivery_range_id' => $postData['range_id'],
            'dt_created' => DATE_TIME
        ];
        $data['table'] = 'delivery_charge_price_range';

        $res = $this->insertRecord($data, true);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    // update
    public function updateVariantPriceRange($postData)
    {
        $data['update'] = [
            'start_price' => $postData['start_price'],
            'end_price' => $postData['end_price'],
            'delivery_charge' => $postData['delivery_charge'],
        ];
        $data['table'] = 'delivery_charge_price_range';
        $data['where'] = ['id' => $postData['price_range_id']];


        $res = $this->updateRecords($data, true);
        return true;

        // if ($res) {
        //     return true;
        // } else {
        //     return false;
        // }
    }


    public function get_single_range_list($id)
    {
        $data['select'] = ['*'];
        $data['table'] = ['delivery_charge_price_range'];
        $data['where'] = ['delivery_range_id' => $id];
        //check
        $res = $this->selectRecords($data, true);
        return $res;
    }

    public function getPriceRange($id)
    {
        $data['select'] = ['*'];
        $data['table'] = ['delivery_charge'];
        $data['where'] = ['id' => $id];

        $res = $this->selectRecords($data, true);
        return $res;
    }

    public function get_single_price_data($id)
    {
        $data['select'] = ['*'];
        $data['table'] = ['delivery_charge_price_range'];
        $data['where'] = ['id' => $id];

        $res = $this->selectRecords($data, true);
        return $res[0];
    }


    public function delete($id)
    {
        $data["where"]["id"] = $id;
        $data["table"] = 'delivery_charge';
        $res = $this->deleteRecords($data);
        ob_get_clean();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode(['status' => 1]);
        exit;
    }

    public function get_valid_start_range()
    {
        // echo "harsh";exit;
        $start_range = $this->input->post('start_range');
        $id = $this->input->post('id');
        if ($id != '') {
            $data['where']['id != '] = $id;
        }
        $data['select'] = ['*'];
        $data['where']['vendor_id'] = $this->vendor_id;
        $data['table'] = "delivery_charge";
        $result = $this->selectRecords($data);

        foreach ($result as $row) {

            $s_range = $row->start_range;
            $e_range = $row->end_range;

            if ($s_range <= $start_range && $start_range <= $e_range) {
                return "false";
            }
        }
        return "true";
    }

    public function get_valid_end_range()
    {
        $end_range = $this->input->post('end_range');
        $id = $this->input->post('id');
        if ($id != '') {
            $data['where']['id != '] = $id;
        }
        $data['select'] = ['*'];
        $data['where']['vendor_id'] = $this->vendor_id;
        $data['table'] = "delivery_charge";
        $result = $this->selectRecords($data);

        foreach ($result as $row) {

            $s_range = $row->start_range;
            $e_range = $row->end_range;

            if ($s_range <= $end_range && $end_range <= $e_range) {

                return "false";
            }
        }
        return "true";
    }
    // me
    public function get_valid_start_price()
    {
        $start_price = $this->input->post('start_price');
        $price_range_id = $this->input->post('price_range_id');


        $whereArray = [];

        if ($price_range_id != '') {
            $whereArray['id != '] =  $price_range_id;
        }

        $range_id = $this->input->post('range_id');

        $data['select'] = ['*'];
        $whereArray['delivery_range_id'] =  $range_id;
        $data['table'] = 'delivery_charge_price_range';
        $data['where'] = $whereArray;

        $res = $this->selectRecords($data, true);

        foreach ($res as $row) :
            $s_price = $row['start_price'];
            $e_price = $row['end_price'];

            if ($s_price <= $start_price && $start_price <= $e_price) {
                return "false";
            }
        endforeach;
        return "true";
    }

    public function get_valid_end_price()
    {
        $end_price = $this->input->post('end_price');
        $price_range_id = $this->input->post('price_range_id');
        // if ($price_range_id != '') {
        //     $data['where']['id != '] = $price_range_id;
        // }
        $whereArray = [];

        if ($price_range_id != '') {
            $whereArray['id != '] =  $price_range_id;
        }

        $range_id = $this->input->post('range_id');

        $data['select'] = ['*'];
        $whereArray['delivery_range_id'] =  $range_id;
        $data['where'] = $whereArray;

        $data['table'] = 'delivery_charge_price_range';

        $res = $this->selectRecords($data, true);

        foreach ($res as $row) :
            $s_price = $row['start_price'];
            $e_price = $row['end_price'];

            if ($s_price <= $end_price && $end_price <= $e_price) {
                return "false";
            }
        endforeach;
        return "true";
    }

    public function delivery_charge_variant_delete($id)
    {
        $data['where'] = ['id' => $id];
        $data['table'] = ['delivery_charge_price_range'];
        $this->deleteRecords($data);
        return true;
    }
}
