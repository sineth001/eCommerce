<?php
class form2 extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_welcome');
        $this->load->library('form_validation');
       if(empty($this->session->userdata('email'))){
            
            redirect('welcome');
            
        }
    }
    
    public function index(){
        //$this->load->view('view_form2');
        
        if($_POST){
            
            $this->form_validation->set_rules('store_name', 'Stock name', 'trim|required|is_unique[user.store_name]');
            $this->form_validation->set_rules('st_address', 'Street address', 'trim|required');
            $this->form_validation->set_rules('city', 'City', 'trim|required');
            $this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required');
            $this->form_validation->set_rules('district', 'District', 'trim|required');
            
            if($this->form_validation->run()==FALSE){
                
                $this->load->view('view_form2');
                
            }else{
                    
                    if( $this->model_welcome->reg_form2()){//bool true
                        
                       
                        redirect('form3');
                    }
                    

            }
        }else{
            $this->load->view('view_form2');
        }
    
    }
}
?>

