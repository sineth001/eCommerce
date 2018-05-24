<?php

class form1 extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_welcome');
        $this->load->library('form_validation');
     
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))){
            
            redirect('welcome');
            
        }else{
        
            if($_POST){

                $this->form_validation->set_rules('fname', 'First name', 'trim|required');
                $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
                $this->form_validation->set_rules('tp', 'T.P. number', 'trim|required|exact_length[10]|is_natural');
                
                $this->form_validation->set_rules('pw', 'Password', 'required');
                $this->form_validation->set_rules('cpw', 'Password Confirmation', 'required|matches[pw]');
                $this->form_validation->set_rules('g-recaptcha-response',' Boot check ','required',
                        array(
                            'required'=>'Bot checking is required to identify you as not a robot'
                        )
                        );

                if($this->form_validation->run()==FALSE){

                    $this->load->view('view_form1');
                }else{

                        if( $this->model_welcome->reg_form1()){//bolean true
                            redirect('form2');
                            }
                }
            }else{

                $this->load->view('view_form1');
            }
        }
    }
}
?>

