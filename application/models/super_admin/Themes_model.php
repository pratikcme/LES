<?php

class Themes_model extends My_model
{
    public function add_theme($postdata)
    {


        $path = FCPATH . 'public/images/' . 'themes_images/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $image = '';
        if (isset($_FILES) && $_FILES['image']['error'] == 0) {
            $file = upload_single_image($_FILES, 'web_logo', $path);
            $image = $file['data']['file_name'];
        }

        $formatedKey = str_replace(' ', '_', $postdata['theme_key']);
        // change the format for key

        $data['insert'] = [
            'image' => $image,
            'name' => $postdata['name'],
            'theme_key' => $formatedKey,
            'details' => $postdata['details'],
            'dt_added' => strtotime(date('Y-m-d H:i:s')),
            'dt_updated' => strtotime(date('Y-m-d H:i:s')),
        ];
        $data['table'] = 'theme_master';

        // dd(base_url() . 'super_admin/themes');
        // die;
        $res = $this->insertRecord($data);
        return $res;
        // if ($res > 0) {
        //     $this->utility->setFlashMessage('success', 'Theme Created successfully');
        //     redirect(base_url()  . 'super_admin/themes');
        // }
    }

    public function deleteTheme($postdata)
    {
        $id = $this->utility->decode($postdata['id']);
        $data['table'] = 'theme_master';
        $data['where'] = ['id' => $id];

        $res = $this->deleteRecords($data);
        if ($res > 0) {
            $this->utility->setFlashMessage('danger', 'Theme Deleted successfully');
            return 1;
        }
    }

    public function checkThemeKeyExist($postdata)
    {

        $formatedKey = str_replace(' ', '_', $postdata['theme_key']);

        $where = [];
        if (isset($postdata['theme_id'])) {
            $where['id!='] =  $postdata['theme_id'];
        }

        $where['theme_key'] = $formatedKey;
        $data['select'] = ['*'];
        $data['table'] = 'theme_master';
        $data['where'] = $where;

        $res =  $this->selectRecords($data);
        if (count($res) > 0) {
            return "false";
        } else {
            return "true";
        }
    }

    public function update_theme($postdata)
    {
        $path = FCPATH . 'public/images/' . 'themes_images/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $update = [];
        if (isset($_FILES) && $_FILES['image']['error'] == 0) {
            unlink($path . $postdata['old_image_name']);

            $file = upload_single_image($_FILES, 'web_logo', $path);
            $update['image'] = $file['data']['file_name'];
        }

        $formatedKey = str_replace(' ', '_', $postdata['theme_key']);

        $update['name'] = $postdata['name'];
        $update['details'] = $postdata['details'];
        $update['theme_key'] = $formatedKey;

        $data['update'] = $update;
        $data['table'] = 'theme_master';
        $data['where'] = ['id' => $postdata['theme_id']];

        // dd($data);
        $res = $this->updateRecords($data);

        return $res;
    }


    public function getThemes($theme_id = '')
    {
        if ($theme_id != '') {
            $data['where'] = ['id' => $theme_id];
        }

        $data['table'] = 'theme_master';
        $data['select'] = ['*'];
        $data['order'] = 'id desc';
        return $this->selectRecords($data);
    }
}
