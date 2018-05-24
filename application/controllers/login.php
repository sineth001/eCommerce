<?php

class login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->library('form_validation');
        //$this->id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
        
    }
    
    public function index(){
        
        
        
       // $this->load->view('view_login');
        if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
            redirect('myprofile');
        }else{
            if($_POST){
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');

                if($this->form_validation->run()==FALSE){
                    $this->load->view('view_login');
                }else{
                    If($this->model_user->login_user()){
                        $user_info=$this->model_user->login_user();

                        //set session
                        $this->session->set_userdata($user_info);
                        $this->session->set_flashdata('flash_data','Welcom '.$_SESSION['first_name']);
                        redirect('myprofile');
                    }else{
                        $this->session->set_flashdata('flash_data','User name and email combination is wrong');
                        //$this->load->view('view_login');
                        redirect('login');
                    }


                }
            }else{
                $this->load->view('view_login');
            }
        
        }  
        
    }
    
    public function logout(){
      
        $user_info=array('id','first_name','last_name','email');
        $this->session->unset_userdata($user_info);
        redirect('login');
        
    
    }
}

?>

