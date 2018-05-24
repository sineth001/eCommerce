<?php
class model_welcome extends CI_Model{
    
    private $email='';
    
    function __construct() {
        parent::__construct();
        $this->load->helper('date'); 
        $this->email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
      
    }
  
    public function get_time(){
         //geting time
         $datestring = '%Y-%m-%d %H:%i:%s';
         $timestamp = time();
         $timezone  = 'UP45';
         //$daylight_saving = TRUE;
         $sl_time=gmt_to_local($timestamp, $timezone);
         $started_time=mdate($datestring, $sl_time);
        // $started_time= date( '%Y-%m-%d %H:%i:%s', time() );
         //strtotime
        // 2017-1-5 10:48:23
         return $started_time;
    }
    
    public function register_seller(){
         $email=$this->input->post('email');
         $started_time=$this->get_time();
    
        if(isset($email)&& !empty($email)){
            
            $data=[
                "email"=>$email
            ];
            $this->session->set_userdata($data);
            
            $data2=[
                "email"=>$email,
                "started_date"=>$started_time
            ];
            
            
            //$query=$this->db->query("INSERT INTO user (email,started_date) VALUES('$email','$started_time')");

         return $this->db->insert('user', $data2 );

        }
        
    }
    //for form1 
    public function reg_form1(){
        $fname=$this->input->post('fname');
        $lname=$this->input->post('lname');
        $tp=$this->input->post('tp');
        $pw=$this->input->post('pw');
         
        if(!empty($fname) && !empty($pw)){
             //$email=$_SESSION['email'];
             
               $data = array(
             
             
                'first_name' => $fname,
                'last_name'  => $lname,
                'tp_no'      => $tp,
                'password'   => $pw
                   
         );
         if(!empty($this->email)) {     

            $this->db->where('email', $this->email); 

            return $this->db->update('user', $data );

               // $query=  $this->db->query("UPDATE user SET first_name='$fname',last_name='$lname',"
                //           . "tp_no='$tp',password='$pw'  WHERE email='$email'");
             
         } else{
             return FALSE;
         }
            
        }
        
    }
    //for form2
    
    public function reg_form2(){
        //$email=$_SESSION['email'];
        
        $store_name=$this->input->post('store_name');
        $data=[
                "store_name"=>$store_name
            ];
        
            $this->session->set_userdata($data);
            
            
            
          
            
        
        $st_address=$this->input->post('st_address');
        $city=$this->input->post('city'); 
        $postal_code=$this->input->post('postal_code');
        $district=$this->input->post('district');
        
        if(!empty($store_name)){
            //$email=$_SESSION['email'];
            
            //update query
            $data2=array(
             'store_name'     => $store_name,
             'street_address' => $st_address,
             ' city'          => $city,
             ' postal_code'   => $postal_code,
             'district'       => $district
         ) ; 
            
            if(!empty($this->email)){
            
                $this->db->where('email',  $this->email);
                return $this->db->update('user',$data2);



    //            $query= $this->db->query("UPDATE user SET store_name='$store_name',street_address='$st_address',"
    //                    . "city='$city',postal_code='$postal_code', district='$district'"
    //                    . "WHERE email='$email'");
            } 
        }
    }
    
    public function reg_form3(){
        
        //$email=$_SESSION['email'];
        $sub_folder_name=$this->input->post('sub_folder_name');
        $domain=$this->input->post('domain');
        //You have to change this
        $pack_id=$this->input->post('package');
        
        if(!empty($sub_folder_name)&&!empty($this->email)){
            //getting user id
           //$query1=$this->db->query("SELECT id FROM user WHERE email='$email'");
            
            // get information for set as session
                $this->db->select('id,first_name,last_name');
                $this->db->from('user');
                $this->db->where('email', $this->email );
                $query1 = $this->db->get();         
                //$query->row_array();
             
            if($query1->num_rows()>0) {
            //die(' ckeck---1');
                // delete the "store_name"  from session
               
                 $user_store=array('store_name');
                 $this->session->unset_userdata($user_store);
                 
                  
                 
                 $user_info=$query1->row_array();
                    $user_id=$user_info['id'];
                    //id set to session
                    $data=[
                            "id"=>$user_id
                        ];
                    
                   $this->session->set_userdata($user_info);

                //getting package id
                    
                //$query2=$this->db->query("SELECT id FROM package WHERE id='$pack_id' ");
               
                    // you done need this query
                    //***************************************
                  /*  $this->db->select('id');
                    $this->db->from('package');
                    $this->db->where('id', $pack_id );
                    $query2 = $this->db->get();         
                    //$query2->row_array();
                */
               // $pack_info=$query2->row_array();
               // $pack_id=$pack_info['id'];

                //update values on user
                $data2=array(
                    'sub_folder_name'  => $sub_folder_name,
                    'domain'           => $domain
                );
                $this->db->where('email',  $this->email);
                $this->db->update('user',$data2);

                if(!empty($user_id)&&!empty($pack_id))  {
                    $started_time=$this->get_time();
                   
                    //insert into backage
                    $data3=array(
                        'user_id'=>$user_id,
                        'pack_id'=>$pack_id,
                        'started_time'=>$started_time
                    );
                    
                    return $this->db->insert('user_package',$data3);
//                    $query4=  $this->db->query("INSERT INTO user_package (user_id,pack_id,started_time)"
//                            . "VALUES('$user_id','$pack_id','$started_time')");


                }


            }
            
            //$user_info = $this->get_user_info_by_email( $email );
            
            //$user_id = $user_info['id'];
            
        } else{
            
            return FALSE;
        
        }
    }
    
    
 //********************************************
  // unused  
    
    function get_user_info_by_email( $email ){
        
        
         if( !$email ){
               return false;
             
         }
         //select query
         $this->db->select('*');
         $this->db->from('user');
         $this->db->where('email', $email );
         $query = $this->db->get();         
         return $query->row_array();//row()
         
         //for OR gate
        $this->db->where_or('email', $email );
         $this->db->where('username', $username );
        
         
         
        // $this->db->orer_by('id','DESC');
        // $this->db->like('email', 'u' );
        // $this->db->limit(10);
         
         
          
          
       //update query
         //-------------------------------------------------------
         
       /*  $data = array(
             
             
              'firsname' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name')
             
         );

         $this->db->where('id', $id );
         $this->db->update('user', $data );
         
         //Insert Query
        * ------------------------------------------------------
          $data = array(
             
             
              'firsname' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name')
             
         );

         return $this->db->insert('user', $data );*/
         
         
         
         //return $query->row_array();
    }
    
    
//   package area------------------------ 
    
    public function get_featurs_for_package($pack_id){
        
        //$query=$this->db->query("SELECT feature_id FROM package_featuer"
            //    . "WHERE pack_id='$pack_id'");
        
        $this->db->select('*');
        $this->db->from('package_feature');
        $this->db->where('pack_id', $pack_id );
        $query = $this->db->get();   
        return $query->result_array();
        
        
        
        /*foreach ($result as $object){
            
            $feature_id=$object->feature_id;
            
           $get_feature = $this->get_feature_by_id($feature_id);
           
           return $get_feature;
           
        }*/
        
        
    }
    
    public function get_feature_by_id($feature_id){
        
//        $query=$this->db->query("SELECT feature FROM feature "
//                . "WHERE id='$feature_id'");
        
        $this->db->select('*');
        $this->db->from('feature');
        $this->db->where('id', $feature_id );
        $query = $this->db->get();   
        
        return $query->row_array();//retern values of a row
    }
    
    public function get_package_by_id($pack_id){
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('id',$pack_id);
        $query=$this->db->get();
        return $query->row_array();
    }
    
    public function get_all_packages(){
        $this->db->select('*');
        $this->db->from('package');
        $query=$this->db->get();
        return $query->result_array();
    }
    
    public function pay_for_package($payment_method){
      
         $data = array(
             
                'payment'  => 1,
                'payment_time' => $this->get_time(),
                 'payment_method'=>$payment_method
                   
         );
         
         $this->db->where('user_id',$_SESSION['id']  );
         return $this->db->update('user_package',$data);
    }
    
    public function get_package_info_by_user_id(){
        $user_id= $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('user_package');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        return $query->row_array();
    }
    
    public function get_user_package(){
        $user_pack_info=$this->get_package_info_by_user_id();
        $pack_id=$user_pack_info['pack_id'];
        
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('id',$pack_id);
        $query=$this->db->get();
        return $query->row_array();
    } 
  
}
?>
