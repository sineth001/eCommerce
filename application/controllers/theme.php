<?php
class theme extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_product');
    }
    
    public function index( $theme_id){
        

                 switch ($theme_id) {
                     case 1:
                         $this->load->view('view_theme_1');
                         break;
                     case 2:
                         $this->load->view('view_theme_2');
                         break;
                     case 3:
                          $this->load->view('view_theme_3');
                         break;
                     case 4:
                          $this->load->view('view_theme_4');
                         break;
                     default:
                         $this->load->view('view_theme_1');
                 }
    }
    
    public function view_product_by_id($id){
       $data=array(
           'id'=>$id
       );
        $this->load->view('view_product',$data);
    }
}
?>
