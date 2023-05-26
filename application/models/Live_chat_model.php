<?php

class Live_chat_model extends My_model
{
    function __construct()
    {
        $this->vendor_id = $this->session->userdata('vendor_admin_id');
    }

    public function getSingleCred()
    {
        $data['select'] = ['*'];
        $data['where'] = ['vendor_id' => $this->vendor_id];
        $data['table'] = TABLE_CHAT_CREDS;

        $res = $this->selectRecords($data);

        if (count($res) > 0) {
            return $res[0];
        } else {
            return "";
        }
    }

    public function add($postData)
    {
        $data['insert'] = [
            'vendor_id' => $this->vendor_id,
            'status' => '1',
            'live_chat_key' => $postData['live_chat_key'],
            'dt_created' => DATE_TIME
        ];
        $data['table'] = TABLE_CHAT_CREDS;
        $res = $this->insertRecord($data);

        if (count($res) > 0) {
            return '1';
        } else {
            return '0';
        }
    }

    public function update($postData)
    {
        $data['update'] = [
            'vendor_id' => $this->vendor_id,
            'status' => '1',
            'live_chat_key' => $postData['live_chat_key'],
            'dt_created' => DATE_TIME
        ];
        $data['table'] = TABLE_CHAT_CREDS;
        $res = $this->updateRecords($data);

        if ($res) {
            return '1';
        } else {
            return '0';
        }
    }


    public function deleteLiveChat($id)
    {
        $data['where'] = ['id' => $id];
        $data['table'] = TABLE_CHAT_CREDS;

        $res = $this->deleteRecords($data);
        if ($res) {
            return '1';
        } else {
            return '0';
        }
    }
}
