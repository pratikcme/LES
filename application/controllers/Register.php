<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Calcutta');

$date = date('Y-m-d H:i:s');
//echo $date;exit;
class Register extends Vendor_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Sell_development_model', 'this_model');
    }
    public function open_register()
    {
        //added by Dipesh
        $data['register_result'] = $this->this_model->getRegister();
        $data['user_result'] = $this->this_model->getUserData();
        $data['total'] = $this->this_model->getRegisterCashTotal($data['register_result']);
        $data['online_result'] = $this->this_model->getRegisterOnlineResult($data['register_result']);

        if (!empty($data['register_result'])) {
            $data['transaction']  = $data['register_result'][0]->transaction;
        } else {
            $data['transaction']  = "0.00";
        }

        $currency = $this->this_model->getCurrency();
        $data['currency'] = $currency[0]->value;

        $this->load->view('registeropen', $data);
    }

    public function close_register()
    {
        //added by Dipesh
        $data['register_result'] = $this->this_model->getRegister();
        $data['user_result'] = $this->this_model->getUserData();
        $data['total'] = $this->this_model->getRegisterCashTotal($data['register_result']);
        $currency = $this->this_model->getCurrency();
        $data['currency'] = $currency[0]->value;
        $this->load->view('registerclosure', $data);
    }

    public function closure_summary($id)
    {
        //added by Dipesh
        $data['register_result'] = $this->this_model->getRegisterSingle($this->utility->decode($id));
        $this->load->view('closure_summary', $data);
    }

    public function closure_summary_list()
    {
        $data['closures_list'] = $this->this_model->getClosedList();
        $this->load->view('closure_summary_list', $data);
        // $data['title'] = "Register";
        // $data['page'] = 'user/register';
        // $data['js'] = 'register_validate';
        // $data['formAction'] = 'register/register_user';
        // $data['registerData'] = $this->this_model->registerData();
        // $this->load->view(USER_LAYOUT, $data);
    }

    public function exportExcelData($records)
    {
        $heading = false;

        if (!empty($records))

            foreach ($records as $row) {

                if (!$heading) {

                    // display field/column names as a first row

                    echo implode("\t", array_keys($row)) . "\n";

                    $heading = true;
                }

                echo implode("\t", ($row)) . "\n";
            }
    }

    public function register_closures_export()
    {
        $vendor_id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * FROM register WHERE vendor_id = '$vendor_id' ORDER BY id DESC");
        $allData = $query->result_array();

        $dataToExports = [];

        $count = 1;
        foreach ($allData as $data) {

            if ($data['type'] == 1) {
                $type = 'Open';
            } elseif ($data['type'] == 0) {
                $type = 'Close';
            }

            $opening_time = date("Y-m-d H:i:s", $data['opening_time']);
            $closing_time = date("Y-m-d H:i:s", $data['closing_time']);

            $arrangeData['Register No.'] = $count++;
            $arrangeData['Cash Amount'] = $data['cash_amount_expected'];
            $arrangeData['Cash Amount Counted'] = $data['counted'];
            $arrangeData['Credit Card Amount'] = $data['credit_card_expected'];
            $arrangeData['Credit Card Counted'] = $data['credit_card_counted'];
            $arrangeData['Store Credit Amount'] = $data['store_credit_expected'];
            $arrangeData['Store Credit Counted'] = $data['store_credit_counted'];
            $arrangeData['Opening Time'] = $opening_time;
            $arrangeData['closing_time'] = $closing_time;
            $arrangeData['type'] =  $type;

            $dataToExports[] = $arrangeData;
        }

        // set header
        $filename = "Register Closures.xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        $this->exportExcelData($dataToExports);
    }

    public function opening_cash()
    {
        $branch_id = $this->session->userdata('id');
        $opening_amount = $_REQUEST['amount'];
        $opening_note = $_REQUEST['note'];

        $array = array(
            'branch_id' => $branch_id,
            'cash_amount_expected' => $opening_amount,
            'transaction' => $opening_amount,
            'open_note' => $opening_note,
            'opening_time' => strtotime(date('Y-m-d H:i:s')),
            'type' => '1'
        );
        $this->db->insert('register', $array);
        redirect(base_url() . 'sell_development');
    }

    public function update_cash_summary()
    {
        $id = $_GET['id'];
        $expected_value = $_GET['expected_value'];
        $counted = $_GET['counted'];
        $cash_dif = $_GET['cash_dif'];


        $array = array(
            'cash_amount_expected' => $expected_value,
            'counted' => $counted,
            'difference' => $cash_dif
        );

        $this->db->where('id', $id);
        $this->db->update('register', $array);

        $return_array = array(
            'cash_counted' => $counted,
            'cash_difference' => $cash_dif
        );

        echo json_encode($return_array);
        return;
        exit();
    }

    public function update_cc_summary()
    {

        $id = $_REQUEST['id'];
        $expected_value = $_REQUEST['expected_value'];
        $counted = $_REQUEST['counted'];
        $cash_dif = $_REQUEST['cash_dif'];

        $array = array(
            'credit_card_expected' => $expected_value,
            'credit_card_counted' => $counted,
            'credit_card_differences' => $cash_dif
        );

        $this->db->where('id', $id);
        $this->db->update('register', $array);

        $return_array = array(
            'credit_card_counted' => $counted,
            'credit_card_differences' => $cash_dif
        );

        echo json_encode($return_array);
        return;
        exit();
    }

    public function update_sc_summary()
    {

        $id = $_REQUEST['id'];
        $expected_value = $_REQUEST['expected_value'];
        $counted = $_REQUEST['counted'];
        $cash_dif = $_REQUEST['cash_dif'];

        $array = array(
            'store_credit_expected' => $expected_value,
            'store_credit_counted' => $counted,
            'store_credit_differences' => $cash_dif
        );

        $this->db->where('id', $id);
        $this->db->update('register', $array);

        $return_array = array(
            'store_credit_counted' => $counted,
            'store_credit_differences' => $cash_dif
        );

        echo json_encode($return_array);
        return;
        exit();
    }

    public  function close_register_button()
    {
        $id = $_GET['id'];
        $closure_note = $_REQUEST['closure_note'];

        $cash_diff = $_GET['cash_diff'];
        $credit_card_expected = $_GET['credit_card_expected'];
        $credit_card_counted = $_GET['credit_card_counted'];
        $credit_card_diff = $_GET['credit_card_diff'];

        $array = array(
            'type' => '0',
            'closure_note' => $closure_note,
            'closing_time' => strtotime(date('Y-m-d H:i:s')),
            'difference' => $cash_diff,
            'credit_card_expected' => $credit_card_expected,
            'credit_card_counted' => $credit_card_counted,
            'credit_card_differences' => $credit_card_diff,
        );

        $this->db->where('id', $id);
        $this->db->update('register', $array);

        redirect(base_url() . 'register/open_register');
        exit();
    }
}
