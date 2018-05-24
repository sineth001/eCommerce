<?php
class package extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->model('model_welcome');
    }
    public function index( $pack_id ){
        
        if(isset($pack_id)){
            
            $pack_info=  $this->model_welcome->get_package_by_id($pack_id);
            if(!empty($pack_info)){
                $this->load->view('view_package',$pack_info);
            }
           
        }else{
            //code
        }
        
        
        
        
    }
}
?>
