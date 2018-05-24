<?php
class model_user extends CI_Model{
    function __construct() {
        parent::__construct();
       
    }
   public function login_user(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        
        $this->db->select('id,first_name,last_name,email');
        $this->db->from('user');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $result=$this->db->get();
        return $result->row_array();
    } 
    
    
   public function get_user_by_id(){
       
      $id= $this->session->userdata('id');
       
       
       $this->db->select('*');
       $this->db->from('user');
       $this->db->where('id', $id );
       $query = $this->db->get();   
       return $query->row_array();
   }
    
   public function update_user_by_id(){
       $id= $this->session->userdata('id');
       
       $data=array(
            'first_name' => $this->input->post('fname'),
            'last_name'  => $this->input->post('lname'),
            'tp_no'      => $this->input->post('tp'),
            'email' => $this->input->post('email'),
             'domain'         => $this->input->post('domain'),
             'store_name'     => $this->input->post('store_name'),
             'street_address' =>$this->input->post('st_address'),
             ' city'          => $this->input->post('city'),
             ' postal_code'   => $this->input->post('postal_code'),
             'district'       => $this->input->post('district')
         ) ; 
       
       $this->db->where('id', $id); 
       return $this->db->update('user', $data );
       
   }
   
   public function change_user_password(){
       
       $id= $this->session->userdata('id');
       $data1=  [
                    'password'=>$this->input->post('pw')
               ];
           
       $this->db->where('id', $id); 
       return $this->db->update('user', $data1 );
   }
    
    
    
   public function get_user_them_by_id(){
        
    }
    
    public function get_user_package_by_id(){
        //code
    }
    
    
    
    
}
?> 


