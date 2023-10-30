<?php
class QuickProduct_model extends My_model
{
    function __construct()
    {
        $this->branch_id = $this->session->userdata['id'];
    }
    function category_add_update($postData)
    {

        if ($_FILES['image']['name'] != '') {
            $image = time() . $_FILES['image']['name'];
        } else {
            $image = '';
        }

        $upload_path = "./public/images/" . $this->folder . "category";
        if (!file_exists($upload_path)) {
            mkdir($upload_path);
        }

        // imagepalettetotruecolor($image);

        $uploadResponse = upload_single_image($_FILES, 'image', $upload_path);
        $uploadResponse['data']['file_name'];

        $this->image_resize_category($uploadResponse['data']['full_path'], $uploadResponse['data']['file_name']);

        $data = array(
            'branch_id' => $this->branch_id,
            'name' => trim($postData['name']),
            'image' => $uploadResponse['data']['file_name'],
            'status' => '1',
            'dt_added' => strtotime(date('Y-m-d H:i:s')),
            'dt_updated' => strtotime(date('Y-m-d H:i:s'))
        );
        $this->db->insert('category', $data);


        $getCatData['select'] = ['*'];
        $getCatData['table'] = TABLE_CATEGORY;
        $getCatData['where'] = ['branch_id' => $this->branch_id, 'status' => '1'];
        $getCatData['order'] = 'id DESC';

        $categoryData =  $this->selectRecords($getCatData);

        $html = "";
        $htmlMain = "";

        foreach ($categoryData as $value) {

            $html .= "<option value=" . $value->id . ">" . $value->name . "</option>";
        }

        $htmlMain .= "<option value='' selected='' disabled=''>Select Category</option><option value='add_new' >Add New Category</option>";
        foreach ($categoryData as $value) {

            $htmlMain .= "<option value=" . $value->id . ">" . $value->name . "</option>";
        }

        $catData = ['html' => $html, 'htmlMain' => $htmlMain];
        echo json_encode($catData);
    }

    public function ajaxCategoryData()
    {
        $getCatData['select'] = ['*'];
        $getCatData['table'] = TABLE_CATEGORY;
        $getCatData['where'] = ['branch_id' => $this->branch_id, 'status' => '1'];
        $getCatData['order'] = 'id DESC';

        $categoryData =  $this->selectRecords($getCatData);

        $html = "";
        $htmlMain = "";
        foreach ($categoryData as $value) {

            $html .= "<option value=" . $value->id . ">" . $value->name . "</option>";
        }


        $htmlMain = "";
        $htmlMain .= "<option value='' selected='' disabled=''>Select Category</option><option value='add_new' >Add New Category</option>";
        foreach ($categoryData as $value) {

            $htmlMain .= "<option value=" . $value->id . ">" . $value->name . "</option>";
        }

        $catData = ['html' => $html, 'htmlMain' => $htmlMain];
        echo json_encode($catData);
    }
    public function image_resize_category($path, $file)
    {

        $config_resize = array();
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image'] = $path;
        $config_resize['create_thumb'] = FALSE;
        $config_resize['maintian_ratio'] = TRUE;
        $config_resize['width'] = 300;
        $config_resize['height'] = 400;
        $config_resize['new_image'] = "./public/images/" . $this->folder . "category_thumb/" . $file;
        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();
    }
}
