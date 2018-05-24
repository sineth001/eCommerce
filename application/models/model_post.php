<?php
 class model_post extends CI_Model{
     
     function __construct() {
         parent::__construct();
         $this->load->model('model_welcome');
     }
     
     public function  get_all_post(){
         
         $user_id=$this->session->userdata('id');
         
         
         $this->db->select('*');
        $this->db->from('post');
        $this->db->where('user_id', $user_id );
        $query = $this->db->get();   
        return $query->result_array();
         
     }
     
     
     public function insert_a_post(){
         
          $title=$this->input->post('title');
              $content=$this->input->post('content');
              $user_id=$this->session->userdata('id');
         
          if(!empty($content))  {
                    //$started_time=$this->get_time();
                    //insert into backage
             //die('fuck'.$this->model_welcome-> get_time());
                    
                    $data=array(
                        'title'=>$title,
                        'content'=>$content,
                        'user_id'=>$user_id,
                        'time'=>$this->model_welcome-> get_time()
                    );
                    
                    return $this->db->insert('post',$data); 
                 


                }
     }
     
     public function update_a_post($id){
         $data = array(
             
             
              'title' => $this->input->post('new_title'),
              'content' => $this->input->post('new_content')
             
         );

         $this->db->where('id', $id );
         return  $this->db->update('post', $data );
         
     }
     
     public function delete_a_post($id){
         
         
         $this->db->where('id', $id );
         return $this->db->delete('post'); ///('post','other_table');AND
     }
     
     
     public function  get_post_by_id($id){
         

         $this->db->select('*');
        $this->db->from('post');
        $this->db->where('id', $id );
        $query = $this->db->get();   
        return $query->row_array();
         
     }
 }
?>
