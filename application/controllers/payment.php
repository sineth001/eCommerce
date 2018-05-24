<?php
class payment extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_welcome');
    }
    
    public function index($id,$pack_name,$initial_payment){
        
        $data=[
            'id'=>$id,
            'pack_name'=>$pack_name,
            'initial_payment'=>$initial_payment
        ];
        $this->load->view('view_payment',$data);
        
    }
    public function pay($payment_method){
        if($this->model_welcome-> pay_for_package($payment_method)){//boolean true
            
            $this->session->set_flashdata('message','You have successfully preceded the payment.....!');
            redirect('first_login/logout');
        }
    }
}

?>

