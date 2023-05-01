<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Themes extends Super_Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('super_admin/themes_model', 'this_model');
    }

    public function index()
    {
        $data['page'] = 'super_admin/themes/list';
        $data['js'] = array('themes.js');
        $data['themes_list'] = $this->this_model->getThemes();
        // $data['init'] = array('USERPROFILE.init()');
        // $data['FormAction'] = base_url() . 'super_admin/themes/add_theme';
        // $data['profile'] = $this->this_model->getProfile();
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function add()
    {
        $data['page'] = 'super_admin/themes/add';
        $data['js'] = array('themes.js');

        $data['init'] = array('THEMES.add()');
        $data['FormAction'] = base_url() . 'super_admin/themes/add_theme';

        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function checkThemeKeyExist()
    {
        if ($this->input->post()) {
            $res = $this->this_model->checkThemeKeyExist($this->input->post());
            echo $res;
        }
    }

    public function add_theme()
    {
        if ($this->input->post()) {
            $validation = $this->setRules();
            if ($validation) {
                $res =  $this->this_model->add_theme($this->input->post());
                if ($res > 0) {
                    $this->utility->setFlashMessage('success', 'Theme Created successfully');
                    redirect(base_url()  . 'super_admin/themes');
                }
            } else {
                $this->utility->setFlashMessage('danger', 'Theme Creation Failed');
                redirect(base_url()  . 'super_admin/themes');
            }
        }
        redirect(base_url() . 'super_admin/themes');
    }

    public function deleteTheme()
    {
        if ($this->input->post()) {
            $res =  $this->this_model->deleteTheme($this->input->post());
            echo $res;
        }
    }

    public function edit($id)
    {
        $theme_id = $this->utility->safe_b64decode($id);
        $data['themeDetails'] = $this->this_model->getThemes($theme_id);

        $data['page'] = 'super_admin/themes/add';
        $data['js'] = array('themes.js');

        $data['init'] = array('THEMES.edit()');
        $data['FormAction'] = base_url() . 'super_admin/themes/update_theme';
        $this->load->view(SUPER_ADMIN_LAYOUT, $data);
    }

    public function update_theme()
    {
        if ($this->input->post()) {
            $validation = $this->setRules();
            if ($validation) {
                $res =  $this->this_model->update_theme($this->input->post());

                $this->utility->setFlashMessage('success', 'Theme Updated successfully');
                redirect(base_url()  . 'super_admin/themes');
            } else {
                $this->utility->setFlashMessage('danger', 'Theme Updation Failed');
                redirect(base_url()  . 'super_admin/themes');
            }
        }
        redirect(base_url() . 'super_admin/themes');
    }

    public function setRules()
    {
        // change
        $config = array(
            array(
                'field' => 'name',
                'lable' => 'name',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => "please enter theme name"
                ]
            ),
            array(
                'field' => 'theme_key',
                'lable' => 'theme_key',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => "please enter theme key"
                ]
            ),
            array(
                'field' => 'details',
                'lable' => 'details',
                'errors' => [
                    'required' => "please enter theme details"
                ]
            ),
            array(
                'field' => 'image',
                'lable' => 'image',
                'errors' => [
                    'required' => "please select theme image"
                ]
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            // echo validation_errors();
            // exit();
        } else {
            return true;
        }
    }
}
