<?php
class form3 extends CI_Controller{
    
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
            
            $this->form_validation->set_rules('sub_folder_name', 'Sub folder name', 'trim|required|is_unique[user.sub_folder_name]',
                    
                    
                       array(
                           
                           'required' => 'The sub folder name is required',
                           'is_unique' => 'Given sub folder name already exists'
                           
                       )
                    
                    
                    );
            $this->form_validation->set_rules('domain', 'Domain', 'trim|required|valid_url');
            $this->form_validation->set_rules('package', 'package', 'required',
                     
                    
                    array(
                        
                        'required' => 'You should select a package'
                    )
                    
                    
                    );
            
            
            if($this->form_validation->run()==FALSE){
                
                $this->load->view('view_form3');
                
            }else{
                    
                    if( $this->model_welcome->reg_form3()){//bool true
                        $pack_id=$this->input->post('package');
                     
                        redirect('package/index/'.$pack_id);
                    }
                    //die("okkkkkk");

            }
        }else{
            $this->load->view('view_form3');
        }
    
    }
    public function package($pack_id){
        $data=[
            'pack_id'=>$pack_id
        ];
        $this->load->view('view_package',$data);
    }
    
   
}
?>


