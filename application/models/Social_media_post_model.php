<?php

class Social_media_post_model extends My_model
{

    function __construct()
    {
        $this->vendor_id = $this->session->userdata('id');
    }


    public function getPosts()
    {
        $data['select'] = ['*'];
        $data['table'] = TABLE_FESTIVALS_POSTS;
        $resultData =  $this->selectRecords($data);
        $postsByMonth = [];
        foreach ($resultData as $value) {
            $time = strtotime($value->date);
            $festDate = date("F Y", $time);

            if (!isset($postsByMonth[$festDate])) {
                $postsByMonth[$festDate] = [];
            }
            $postsByMonth[$festDate][] = $value;
        }
        return $postsByMonth;
    }

    public function getPostsDetails($id)
    {
        $data['select'] = ['*'];
        $data['table'] = TABLE_FESTIVALS_POSTS;
        $data['where'] = ['id' => $id];
        return $this->selectRecords($data);
    }


    public function getThemePostsDetails($id)
    {
        $data['select'] = ['*'];
        $data['table'] = TABLE_POSTS_THEMES;
        $data['where'] = ['festival_id' => $id];
        return $this->selectRecords($data);
    }


    public function getVendorData()
    {

        $data['select'] = ['*'];
        $data['table'] = TABLE_VENDOR;
        $data['where'] = ['id' => $this->vendor_id];
        return $this->selectRecords($data);
    }

    public function storePosts($filename)
    {

        $data['insert'] = ['vendor_id' => $this->vendor_id, 'post_image' => $filename, 'created_at' => DATE_TIME];
        $data['table'] = TABLE_VENDOR_SOCIAL_POSTS;
        return $this->insertRecord($data);
    }
}
