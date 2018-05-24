<?php
 class model_product extends CI_Model{
     
     function __construct() {
         parent::__construct();
         $this->load->model('model_welcome');
//         $this->user_id=$this->session->userdata('id');
     }
     
     public function  get_all_product(){
         
     
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();   
        return $query->result_array();
         
     }
      public function  get_product_by_id($id){
         

         $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id', $id );
        $query = $this->db->get();   
        return $query->row_array();
         
     }
     public function get_4_products(){
         $this->db->select('*');
         $this->db->limit(4);
        $this->db->from('products');
        $query = $this->db->get();   
        return $query->result_array();
     }
     
     //below codes are comented , Can delete it
     
     public function insert_a_product(){
         
          $title=$this->input->post('title');
          $description=$this->input->post('description');
          $img_url=$this->input->post('img_url');
          $price=$this->input->post('price');
          $compare_at=$this->input->post('compare_at');
          $sku=$this->input->post('sku');
          $barcode=$this->input->post('barcode');
          $inventory_policy=$this->input->post('inventory_policy');
         
         
         
                    
                    $data=array(
                        'title'=>$title,
                        'description'=>$description,
                        'img_url'=>'url',
                        'price'=>$price,
                        'compare_at'=>$compare_at,
                        'sku'=>$sku,
                        'barcode'=>$barcode,
                        'inventory_policy'=>$inventory_policy,
                        
                        'time'=>$this->model_welcome-> get_time(),
                        'user_id'=>$this->user_id
                            
                    );
                    
                    return $this->db->insert('products',$data); 
                 


               
     }
     
     public function update_a_product($id){
          $title=$this->input->post('title');
          $description=$this->input->post('description');
          $img_url=$this->input->post('img_url');
          $price=$this->input->post('price');
          $compare_at=$this->input->post('compare_at');
          $sku=$this->input->post('sku');
          $barcode=$this->input->post('barcode');
          $inventory_policy=$this->input->post('inventory_policy');
         
         
         
                    
                    $data=array(
                        'title'=>$title,
                        'description'=>$description,
                        'img_url'=>'url',
                        'price'=>$price,
                        'compare_at'=>$compare_at,
                        'sku'=>$sku,
                        'barcode'=>$barcode,
                        'inventory_policy'=>$inventory_policy,
                        
                        'time'=>$this->model_welcome-> get_time(),
                        'user_id'=>$this->user_id
                            
                    );

         $this->db->where('id', $id );
         return  $this->db->update('products', $data );
         
     }
     
     public function delete_a_post($id){
         
         
         $this->db->where('id', $id );
         return $this->db->delete('post'); ///('post','other_table');AND
     }
     
     
    
 }
?>
