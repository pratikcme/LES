<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branches extends Super_Admin_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->url = 'super_admin/branches/';
		$this->load->model('super_admin/branches_model', 'this_model');
		$this->load->model('super_admin/vendors_model', 'vendors_model');
		$this->load->model('super_admin/store_type_model');
	}

	public function index()
	{

		$data['page'] = 'super_admin/branches/list';
		$data['getVendors'] = $this->vendors_model->getVendors();
		$data['getBranches'] = $this->this_model->getBranch();
		$data['vendor_id'] = '0';
		if ($this->input->post()) {
			// dd($this->input->post());
			$vendor_id = $this->input->post('vendor_id');
			$data['getBranches'] = $this->this_model->getBranch('', $vendor_id);
			$data['vendor_id'] = $vendor_id;
		}
		// dd($data['getBranches']);
		$data['js'] = array('branches.js');
		$this->load->view(SUPER_ADMIN_LAYOUT, $data);
	}

	public function change_status($branch_id)
	{
		$responce = $this->this_model->change_status($branch_id);
		if ($responce) {
			$this->utility->setFlashMessage('success', 'Branche status change successfully');
		}
		redirect(base_url() . $this->url);
	}

	public function edit($branch_id = '')
	{
		$d_id = $this->utility->safe_b64decode($branch_id);
		$data['page'] = 'super_admin/branches/edit';
		$data['js'] = array('branches.js');
		$data['init'] = array('BRANCHES.edit()');
		$data['editData'] = $this->this_model->getBranch($d_id);
		// dd($data['editData']);
		$data['getStore'] = $this->store_type_model->getStore();
		$data['FormAction'] = base_url() . $this->url . 'edit/' . $branch_id;
		if ($this->input->post()) {
			$responce = $this->this_model->updateBranch($d_id, $this->input->post());
			if ($responce) {
				$this->utility->setFlashMessage('success', 'Vendor updated successfully');
				redirect(base_url() . $this->url);
			} else {
				$this->utility->setFlashMessage('danger', 'Somthing went Wrong');
				redirect(base_url() . $this->url);
			}
		}
		$this->load->view(SUPER_ADMIN_LAYOUT, $data);
	}
}
