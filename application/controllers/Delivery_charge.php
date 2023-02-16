<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Delivery_charge extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $vendor_id = $this->session->userdata['id'];
        $this->load->model('delivery_charge_model', 'this_model');
    }

    public function index()
    {
        $data['city_result'] = $this->this_model->getDeliveryCharegeData();
        $this->load->view('delivery_charge_list', $data);
    }

    public function delivery_charge()
    {
        $data['city_result'] = $this->this_model->getDeliveryCharegeData();
        $this->load->view('delivery_charge_list', $data);
    }

    public function delivery_charge_add()
    {
        if ($this->input->post()) {
            $res = $this->this_model->delivery_charge_Add();
            redirect('delivery_charge');
        }
        $this->load->view('delivery_charge');
    }
    // change

    public function delivery_charge_variants($range_id)
    {
        // dd($this->utility->decode($range_id));
        // die;

        $id = $this->utility->decode($range_id);
        $data['range_data'] = $this->this_model->getPriceRange($id);
        $data['range_id'] = $id;
        $data['range_variants_list'] = $this->this_model->get_single_range_list($id);
        // redirect('delivery_charge');
        $this->load->view('delivery_charge_price_range', $data);

        // $this->load->view('delivery_charge_price_range', $data);
    }

    // change 2
    public function delivery_charge_variants_addForm($range_id)
    {
        $id = $this->utility->decode($range_id);
        $data['range'] = $this->this_model->getPriceRange($id);
        $data['range_id'] = $id;
        $data['formAction'] = 'delivery_charge/delivery_charge_variant_add';
        // $data['price_range_vals'] = ['1'];
        // $data['price_range_id'] = '1';
        $this->load->view('delivery_charge_variant_addForm', $data);
    }

    public function delivery_charge_variant_edit($range_id, $price_range_id)
    {
        $data['range_id'] = $this->utility->decode($range_id);
        $data['price_range_id'] = $this->utility->decode($price_range_id);
        $data['price_range_vals'] = $this->this_model->get_single_price_data($data['price_range_id']);
        $data['formAction'] = 'delivery_charge/delivery_charge_variant_update';
        // $data['range'] = $this->this_model->getPriceRange($id);
        // $data['range_id'] = $id;
        // // $data['price_range_vals'] = ['1'];
        // // $data['price_range_id'] = '1';
        $this->load->view('delivery_charge_variant_addForm', $data);
    }



    public function delivery_charge_variant_add()
    {
        $res = $this->this_model->addVariantPriceRange($this->input->post());
        $id = $this->input->post("range_id");
        if ($res) {
            $this->utility->setFlashMessage('success', 'Successfully added variant.');
        } else {
            $this->utility->setFlashMessage('danger', 'Failed to add variant.');
        }
        redirect(base_url() . 'delivery_charge/delivery_charge_variants/' . $this->utility->encode($id));
    }

    // update
    public function delivery_charge_variant_update()
    {
        $res = $this->this_model->updateVariantPriceRange($this->input->post());
        $id = $this->input->post("range_id");

        if ($res) {
            $this->utility->setFlashMessage('success', 'Successfully updated variant.');
        } else {
            $this->utility->setFlashMessage('danger', 'Failed to update variant.');
        }
        redirect(base_url() . 'delivery_charge/delivery_charge_variants/' . $this->utility->encode($id));
    }


    public function delete()
    {
        $id = $this->input->get('id');
        $this->this_model->delete($id);
    }
    public function get_valid_start_range()
    {
        $return = $this->this_model->get_valid_start_range();
        echo $return;
    }
    public function get_valid_end_range()
    {
        $return = $this->this_model->get_valid_end_range();
        echo $return;
    }
    // me
    public function get_valid_start_price()
    {
        $return = $this->this_model->get_valid_start_price();
        echo $return;
    }
    public function get_valid_end_price()
    {
        $return = $this->this_model->get_valid_end_price();
        echo $return;
    }
    public function delivery_charge_variant_delete()
    {
        $id = $this->input->post('id');

        $return = $this->this_model->delivery_charge_variant_delete($id);
        echo $return;
    }
}
