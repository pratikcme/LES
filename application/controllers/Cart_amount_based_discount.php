<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Cart_amount_based_discount extends Admin_Controller
{
     function __construct(){
        parent::__construct();
        $this->load->model('Cart_amount_based_discount_model','this_model');
    }

    public function index()
    {
        $data['page'] = 'promocode/list';
        $data['js'] = array('cart_based_discount.js');
        $data['promocodes'] = $this->this_model->allData();
        // dd($data['promocodes']);
        $this->load->view('cart_based_discount/list',$data);
    }

    public function add(){
        $data['page'] = 'cart_based_discount/add';
        $data['js'] = array('cart_based_discount.js');
        $data['FormAction'] = base_url().'Cart_amount_based_discount/add';
            if($this->input->post()){          
                $result = $this->this_model->addRecord($this->input->post());
                 if($result){
                    $this->utility->setFlashMessage($response['status'], $response['message']);
                    redirect(base_url().'Cart_amount_based_discount');
                 }
            }
        
        $this->load->view('cart_based_discount/add',$data);
    }

    public function edit($d_id){
        $this->id = $this->utility->decode($d_id);
        $data['js'] = array('cart_based_discount.js');
        $data['FormAction'] = base_url().'Cart_amount_based_discount/edit/'.$d_id;
        $data['updated_id'] = $d_id;
        if($this->input->post()){
            $result = $this->this_model->updateRecord($this->input->post());
            if($result){
                $this->utility->setFlashMessage($response['status'], $response['message']);
                redirect(base_url().'Cart_amount_based_discount');
             }
            

        }
        $data['editData'] = $this->this_model->allData($this->id);
        $this->load->view('cart_based_discount/edit',$data);
    }



    public function removeRecord(){

     if($this->input->post()){
         $response = $this->this_model->removeRecord($this->input->post('id'));
         if($response){
            echo json_encode(['status'=>1]);
         }
        }

    }

    public function multipleDelete()
    {
        $re = $this->this_model->multi_delete();
        
    }   

    public function checkAmountExist(){
        if($this->input->is_ajax_request()){
           echo $this->this_model->checkAmountExist($this->input->post());
        }
    }


    public function status_change()
    {
        $id = $_GET['id'];
        $this->this_model->cart_base_amt_discount_status($id);
    }


   
}

?>