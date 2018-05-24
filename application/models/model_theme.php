<?php
class model_theme extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function user_select_theme($theme_id){
        $user_id=$_SESSION['id'];
        
        $data=[
                "user_id"=>$user_id,    
                "theme_id"=>$theme_id
                
            ];
            
           

         return $this->db->insert('user_theme', $data );
         
         
       // die('this is ok');
        
//       $query= $this->db->query("INSERT INTO user_theme (user_id,theme_id) VALUES('$user_id','$theme_id')");
//       if($query==TRUE){
//           return TRUE;
//           
//           
//       }
    } 
    
    public function user_update_theme($theme_id){
        $user_id=$_SESSION['id'];
        
        $data1=[
                  
                "theme_id"=>$theme_id
                
            ];
        $this->db->where('user_id', $user_id); 
       return $this->db->update('user_theme', $data1 );
    }
    
    public function get_theme_by_user_id(){
        $user_id=$_SESSION['id'];
        
        $this->db->select('*');
        $this->db->from('user_theme');
       $this->db->where('user_id', $user_id );
       $query = $this->db->get();   
       $theme_info=$query->row_array();
       
       if(isset($theme_info)){
            $theme_id=$theme_info['theme_id'];
            $this->db->select('*');
            $this->db->from('theme');
            $this->db->where('id', $theme_id );
            $query = $this->db->get();   
            return $query->row_array(); 
       }
    }
    
}
?>

