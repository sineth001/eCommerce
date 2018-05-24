<?php
class profile extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_theme');
        $this->load->model('model_theme');
        $this->load->library('form_validation');
        
        if(empty($this->session->userdata('id'))){
            
            redirect('login');
            
        }
    }
    
    public function index(){
        
        
        $this->load->view('view_profile');
        
        
    }
    public function select_theme($theme){
        
        
        
        if(isset($theme)){
            if($this->model_theme->user_select_theme($theme)){//bool true
                
//                 $user_data=array( 'id','first_name','last_name','email');
//                 $this->session->unset_userdata($user_data);
                
                redirect('Success');
            }
        }else{
            $this->load->view('view_profile');
        }
    }
}
?>

