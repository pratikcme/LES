<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tax extends Super_Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('super_admin/Tax_model', 'this_model');
        $this->url = 'super_admin/tax/';
    }

    public function index()
    {

        $data['page'] = 'super_admin/tax/list';
        // if ($this->input->post()) {
        // }
        $data['getTaxList'] = $this->this_model->getTax();
        $data['js'] = array('tax.js');
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function add()
    {
        $data['page'] = 'super_admin/tax/add';
        $data['FormAction'] = base_url() . $this->url . 'add';
        $data['js'] = array('tax.js');
        $data['init'] = array('TAX.add()');
        if ($this->input->post()) {
            $this->this_model->store($this->input->post());
            $this->utility->setFlashMessage('success', 'Tax  added successfully');
            redirect(base_url() . $this->url);
        }
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }


    public function edit($tax_id = '')
    {
        $d_id = $this->utility->safe_b64decode($tax_id);
        $data['page'] = 'super_admin/tax/edit';
        $data['js'] = array('tax.js');
        $data['init'] = array('TAX.add()');
        $data['editData'] = $this->this_model->getTax($d_id);
        $data['FormAction'] = base_url() . $this->url . 'edit/' . $tax_id;
        if ($this->input->post()) {
            $responce = $this->this_model->update($d_id, $this->input->post());
            if ($responce) {
                $this->utility->setFlashMessage('success', 'tax updated successfully');
                redirect(base_url() . $this->url);
            }
        }
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }


    public function delete()
    {

        if ($this->input->post()) {

            $res =  $this->this_model->delete($this->input->post());
            echo $res;
        }
    }


    public function tax_type()
    {
        $data['page'] = 'super_admin/tax/tax_type_list';
        // if ($this->input->post()) {
        // }
        $data['getTaxTypeList'] = $this->this_model->getTaxType();

        $data['js'] = array('tax.js');
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function tax_type_add()
    {
        $data['page'] = 'super_admin/tax/add_tax_type';
        $data['FormAction'] = base_url() . $this->url . 'tax_type_add';
        $data['getTaxList'] = $this->this_model->getTax();
        $data['js'] = array('tax.js');
        $data['init'] = array('TAX.addTaxType()');
        if ($this->input->post()) {
            $this->this_model->storeTaxType($this->input->post());
            $this->utility->setFlashMessage('success', 'Tax Type  added successfully');
            redirect(base_url() . $this->url . '/tax_type');
        }
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function tax_type_edit($tax_type_id = '')
    {
        $d_id = $this->utility->safe_b64decode($tax_type_id);
        $data['page'] = 'super_admin/tax/edit_tax_type';
        $data['js'] = array('tax.js');
        $data['init'] = array('TAX.addTaxType()');
        $data['editTaxTypeData'] = $this->this_model->getTaxType($d_id);
        $data['FormAction'] = base_url() . $this->url . 'tax_type_edit/' . $tax_type_id;
        if ($this->input->post()) {
            $responce = $this->this_model->updateTaxType($d_id, $this->input->post());
            if ($responce) {
                $this->utility->setFlashMessage('success', 'tax updated successfully');
                redirect(base_url() . $this->url . '/tax_type');
            }
        }
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function delete_tax_type()
    {

        if ($this->input->post()) {

            $res =  $this->this_model->deleteTaxType($this->input->post());
            echo $res;
        }
    }
}
