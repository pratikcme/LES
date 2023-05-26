<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Live_chat extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('live_chat_model', 'this_model');
        // $this->url = 'live_chat';
    }
    public function index()
    {
        $data['js'] = array('live_chat.js');
        $data['creds'] = $this->this_model->getSingleCred();
        $data['FormAction'] = base_url() . 'live_chat/addUpdate';
        $this->load->view('live_chat_form', $data);
    }

    public function addUpdate()
    {
        if ($this->input->post()) {
            $editId = $this->input->post('edit_id');
            if ($editId != "") {
                $res = $this->this_model->update($this->input->post());
                if ($res) {

                    $this->utility->setFlashMessage('success', 'Successfully updated credentials.');

                    redirect(base_url() . 'live_chat');
                } else {

                    $this->utility->setFlashMessage('danger', 'Somthing Went Wrong');
                    redirect(base_url() . 'live_chat');
                }
            } else {

                $res = $this->this_model->add($this->input->post());
                if ($res) {
                    $this->utility->setFlashMessage('success', 'Successfully added credentials.');
                    redirect(base_url() . 'live_chat');
                } else {
                    $this->utility->setFlashMessage('danger', 'Somthing Went Wrong');
                    redirect(base_url() . 'live_chat');
                }
            }
        }
    }

    public function deleteCreds()
    {
        if ($this->input->get()) {
            $id = $this->utility->decode($this->input->get('id'));
            $res = $this->this_model->deleteLiveChat($id);
            echo $res;
        }
    }
}
