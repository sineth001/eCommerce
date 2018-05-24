<?php
class late_payment extends CI_Controller{
    
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
        $this->load->view('view_late_payment',$data);
        
    }
    public function pay($payment_method){
        if($this->model_welcome-> pay_for_package($payment_method)){//boolean true
            
           
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>You have successfully preceded the payment.</p>');
            redirect('myprofile');
        }
    }
}

?>

