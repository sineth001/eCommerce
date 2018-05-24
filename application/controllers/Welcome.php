<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    
    function __construct() {
        parent::__construct();
        $this->load->model('model_welcome');
        $this->load->library('form_validation');
        //$this->session->unset_userdata('email','id');
    }

	public function index()
                
	{
            
            //for testing
           // $this->load->view('my__css_test');
            
            
            
		//$this->home();
                
                if($_POST){
                    
                    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[user.email]');
                    if ($this->form_validation->run() == FALSE){
                                        
                              $this->load->view('welcome_message');
                              
                        }else{
                    
                            if($this->model_welcome-> register_seller()){//boolean true
                        
                                redirect('form1');
                            }                      
                    
                        }
                
                }else{
                    // if not set post go to home
                    $this->home();
                }
	}
        
        public function home(){
            $this->load->view('welcome_message');
        }
}
