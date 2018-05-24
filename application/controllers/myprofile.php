<?php
class myprofile extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->model('model_welcome');
         $this->load->model('model_user'); 
         $this->load->model('model_theme'); 
         $this->load->library('form_validation');
    }
    public function index( ){
        
         if($_POST){

                $this->form_validation->set_rules('fname', 'First name', 'trim|required');
                $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
                $this->form_validation->set_rules('tp', 'T.P. number', 'trim|required|exact_length[10]|is_natural');
                $this->form_validation->set_rules('domain', 'Domain', 'trim|required|valid_url');
//                $this->form_validation->set_rules('email', 'Email', 'callback_email_ckeck'); 
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                
                
                $this->form_validation->set_rules('store_name', 'Stock name', 'trim|required');
//                $this->form_validation->set_rules('store_name', 'Stock name', 'trim|required|is_unique[user.store_name]');
                $this->form_validation->set_rules('st_address', 'Street address', 'trim|required');
                $this->form_validation->set_rules('city', 'City', 'trim|required');
                $this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required');
                $this->form_validation->set_rules('district', 'District', 'trim');
                

                if($this->form_validation->run()==FALSE){
                    if( $this->model_user->get_user_by_id()&&$this->model_theme->get_theme_by_user_id()){//bolean true
                            $theme_info=$this->model_theme->get_theme_by_user_id();
                            $user_info=$this->model_user->get_user_by_id();
                            $user_info+=[
                                'theme_name'=>$theme_info['name'],
                                'theme_img_url'=>$theme_info['img_url']
                            ];
                            
                            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
                            
                              $this->load->view('view_myprofile',$user_info);
                            }
                    
                    
                    
                   
                }else{

                        if( $this->model_user->update_user_by_id()){//bolean true
                            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                          . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>Your details were updated successfully </p>');
                            redirect('myprofile');
//                            if( $this->model_user->get_user_by_id()){//bolean true
//                                  $user_info=$this->model_user->get_user_by_id();
//                                  $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: red;">'
//                                          . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>Your details were updated successfully </p>');
//                                  $this->load->view('view_myprofile',$user_info);
//                            }
                            
                              
                            }
                }
            }else{
                if( $this->model_user->get_user_by_id()&&$this->model_theme->get_theme_by_user_id()){//bolean true
                            $theme_info=$this->model_theme->get_theme_by_user_id();
                            $user_info=$this->model_user->get_user_by_id();
                            $user_info+=[
                                'theme_name'=>$theme_info['name'],
                                'theme_img_url'=>$theme_info['img_url']
                            ];
                            
                              $this->load->view('view_myprofile',$user_info);
                            }
                

                
            }
        
        
    }
    
    
    public function change_password(){
        
        
        if($_POST){
            $this->form_validation->set_rules('pw', 'Password', 'required');
            $this->form_validation->set_rules('cpw', 'Password Confirmation', 'required|matches[pw]');
            if($this->model_user->get_user_by_id()&&$this->model_theme->get_theme_by_user_id()){
                $theme_info=$this->model_theme->get_theme_by_user_id();
                $user_info=$this->model_user->get_user_by_id();
                
                $user_info+=[
                                'theme_name'=>$theme_info['name'],
                                'theme_img_url'=>$theme_info['img_url']
                            ];
                
                if($this->form_validation->run()==FALSE){
                
                    $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
                    $this->load->view('view_myprofile',$user_info);
                }else{
                    if($this->model_user->change_user_password()){
                        $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>Your Password was updated successfully </p>');
                        redirect('myprofile');
//                        $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
//                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>Your Password was updated successfully </p>');
//                        $this->load->view('view_myprofile',$user_info);
            
                    }
                }
            }
            
            
            
        }
        
    }
  
    public function user_package($pack_id){
        
        if(isset($pack_id)){
            
            $pack_info=  $this->model_welcome->get_package_by_id($pack_id);
            if(!empty($pack_info)){
                $this->load->view('view_user_package',$pack_info);
            }
           
        }else{
            //code
        }
        
        
    }
    
    public function email_ckeck($email){
        return true;
        if($this->model_user->get_user_by_id()){
            
        }
    }
}
?>