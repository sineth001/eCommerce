<?php
class change_theme extends CI_Controller{
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
        
        
        $this->load->view('view_change_theme');
        
        
    }
    public function select_theme($theme){
        
        
        
        if(isset($theme)){
            if($this->model_theme->user_update_theme($theme)){//bool true
                
//                 $user_data=array( 'id','first_name','last_name','email');
//                 $this->session->unset_userdata($user_data);
                
                $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>Your Theme was updated successfully </p>');
                
                redirect('myprofile');
            }
        }else{
            $this->load->view('view_change_theme');
        }
    }
}
?>

