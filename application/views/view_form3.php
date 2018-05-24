<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>eCommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <link href="<?php echo base_url('css/css/master.css') ;?> " rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/ecommerce/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--font-family: 'Lato', sans-serif;-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet"> 
        <!--font-family: 'Oswald', sans-serif;-->
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <!--font-family: 'Gloria Hallelujah', cursive;-->
        <style>
            .body-wrapper{
                color:#ffffff;  
                /*background-image: url(<?php // echo base_url('css/images/main_image.jpg') ;?>);*/
                margin-top: -21px; 
                background-size: cover; 
                background-color:#d5d6de;
            }
            .mynav{
                
                margin-left: -15px;
                margin-right:0px;
                margin-bottom: -21px;
            }
            .nav-style a,.nave-style.btn{
                color: black;
                font-size: 16px;
                border-radius: 0;
                
            }
            .btn_submit{
                padding: 10px 64px;
                background-color: #e58f67;
                margin: 0 8px;
                
            }
            .btn_goback{
                
                padding: 10px 60px;
                background-color: #93eaa9;
                margin: 0px 8px;
            }
            .btn{
                border-radius: 0px;
                color: #ffffff;
                font-size: 20px;
            }
            .well-sm{
                height:300px;
                background-color: #A68B93;
                color: #000000;
                font-weight: 700;
                padding: 29px;
                margin: 32px;
            }
            .radio-style{
                height: 30px;
                width: 30px;
            }
            .form-error{
                color: rgb(255, 0, 92);
                font-size: 13px;
            }
            .course {
                border: 1px solid #eee;
                box-shadow: 0 0 7px -1px #eee;
                margin: 7px 5px 8px 5px;
                width: 32%;
            }
            .pack_link_text{
                font-size: 10px;
                padding: 16px;
            }
            .course .img_wrapper:hover .img_overflow {
                transform: translateY(67px);
            }
            .btn:hover, .btn:focus {
                color: gray;
                text-decoration: none;
            }
            .form-wrapper {
                width: 60%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
            }
            .form-topic-style{
                width: 61%;
                margin: auto;
                text-align: left;
                background-color: #404489;
                margin-top: 36px;
            }
           input[type=checkbox]:not(old),
           input[type=radio   ]:not(old){
              width   : 28px;
              margin  : 0;
              padding : 0;
              opacity : 0;
            }

            input[type=checkbox]:not(old) + label,
            input[type=radio   ]:not(old) + label{
              display      : inline-block;
              margin-left  : -28px;
              padding-left : 28px;
              background   : url(<?php echo base_url('css/images/checks.png') ;?>) no-repeat 0 0;
              line-height  : 24px;
            }

            input[type=checkbox]:not(old):checked + label{
              background-position : 0 -24px;
            }

            input[type=radio]:not(old):checked + label{
              background-position : 0 -48px;
            }

            
	</style>
</head>

<body class=""  style=" font-family: 'Lato', sans-serif; ">
    
     <div  class="row mynav" >
    
      <nav class="navbar nav-style">
      <div class="container-fluid">
          <div class="navbar-header" style="">
              <a class="navbar-brand" href="#" style="padding :0; margin :10px;"><img src="<?php echo base_url('css/images/logo.png')?>"></a>
        </div>
        <ul class="nav navbar-nav" style="    padding: 10px 10px 10px 20px;">
          <li ><a href="#">HOME</a></li>
          <li><a href="#">ABOUT </a></li>
          <li><a href="#">FEATURES </a></li>
          <li><a href="#">CAREERS</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
          
        <ul class="nav navbar-nav navbar-right" style="">
          <li style=" padding: 10px 10px 10px 20px;"><a href="<?php echo site_url('login/logout'); ?>"> Login</a></li>
          <li ><a class="btn" style="float :right; background-color: #8211FF; color: #FFFEFF; padding: 21px;font-size: 21px; " href="#">
                  <i class="fa fa-rocket" style="font-size:  27px; padding-right: 6px;" aria-hidden="true"></i>
                  GET STARTED</a></li>
        </ul>
      </div>
    </nav>

    
</div> 
     
<div class=" container-fluid body-wrapper" style="  ">
    <!--header-->
        <div class="row form-topic-style" >
            <h3 style=" padding: 8px 14px 14px 41px; ">Select a Package</h3>
        
        </div>
    <!--form area--------------------------------------------------------------------->
    <div class="row">
        <!--error area-->
        
        <!--form-- ------------------>
        <div class="form-wrapper" style="  ">
<!--
            <hr style=" border : 1px solid #c0c0c0;">-->

            <form class="form" action="<?php echo site_url('form3') ?>" method="post">


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('sub_folder_name'); ?>
                        </div>
                    <label class="label-style" >Sub folder name </label>
                    <input type="text" name="sub_folder_name" placeholder="Sub folder name" value="<?php if(isset($_SESSION['store_name'])){ echo $_SESSION['store_name'];} ?>" class=" form-style form-control "  style=" ">
                </div>

                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('domain'); ?>
                        </div>
                    <label class="label-style"> Your domain </label>
                    <input type="text" name="domain" placeholder="your domain (E.g:-www.example.com)" value="<?php echo set_value('domain'); ?>" class="form-control form-style"  style=" ">
                </div>
        <!--------package area----------------------------------->
                    
        <div class="row" style=" text-align: center; color: gray; ">
                <div class="row form-error" style="height : 21px;">
                    <?php echo form_error('package'); ?>
                </div>
            <!--package area new-->
            <div class="row">
                <!--package 1-->
                <div class="col-lg-4"  >
                    <?php
                    
                    if($this->model_welcome->get_package_by_id(1)){
                        $pack_info=$this->model_welcome->get_package_by_id(1);
                    
                    
                    
                    ?>
                    <!--row1-->
                    <div style=" height: 50px;  background-color: #DB4B4B; color: white;">
                        <p style="padding: 10px;text-align: left;font-size: 16px;font-weight: 600;"><?php echo $pack_info['pack_name'];?> Level</p>
                        
                    </div>
                    <!--row2-->
                    <div style=" height: 180px; color: #DB4B4B; background-color: #374140; font-family: 'Oswald', sans-serif;">
                        
                        <p style="padding-top: 28px;"><span style="    display: inline-block; vertical-align: top;">Rs</span><span style=" font-size: 80px;" ><?php echo $pack_info['price'];?></span>/ year</p>
                    </div>
                    <!--row3-->
                    <div style=" height: 250px;  color: #b7b0b0; padding-top: 27px; box-shadow: 1px 1px 1px 1px #c0c0c0;">
                        <?php
                        if($this->model_welcome->get_featurs_for_package($pack_info['id'])){
                            $get_feature_info=$this->model_welcome->get_featurs_for_package($pack_info['id']);
                            foreach ( $get_feature_info as $feature){
                                if($this->model_welcome->get_feature_by_id($feature['feature_id'])){

                                                $feature_info=$this->model_welcome->get_feature_by_id($feature['feature_id']);


                                               

                        ?>
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i><?php  echo $feature_info['feature']; ?> </p>
                        
                         <?php
                                 }
                            }

                    ?>
                        
                        <div class="btn" style=" font-size: 14px; margin: auto; width: 50%; height: 40px;  background-color: #DB4B4B; color: white;margin-top: 21px;border-radius: 18px 0px; ">
                            
                            <input id="option1" type="radio" name="package"  value="<?php  echo $pack_info['id']; ?>" class="" style="margin-bottom: 5px;">
                                <label for="option1">Select this</label>
                        </div>
                    </div>
                    <!--row4-->
                   <?php
                        }
                    }
                   ?>

                </div>
                <!--package 2-->
                <div class="col-lg-4"  >
                    <?php
                    
                    if($this->model_welcome->get_package_by_id(2)){
                        $pack_info=$this->model_welcome->get_package_by_id(2);
                    
                    
                    
                    ?>
                    <!--row1-->
                    <div style=" height: 50px;  background-color: #F0C30E; color: white;">
                        <p style="padding: 10px;text-align: left;font-size: 16px;font-weight: 600;"><?php echo $pack_info['pack_name'];?> Level</p>
                        
                    </div>
                    <!--row2-->
                    <div style=" height: 180px; color: #F0C30E; background-color: #374140; font-family: 'Oswald', sans-serif;">
                        
                        <p style="    padding-top: 28px;"><span style="    display: inline-block; vertical-align: top;">Rs</span><span style=" font-size: 80px;" ><?php echo $pack_info['price'];?></span>/ year</p>
                    </div>
                    <!--row3-->
                    <div style=" height: 250px;  color: #b7b0b0; padding-top: 27px; box-shadow: 1px 1px 1px 1px #c0c0c0;">
                        
                         <p><i class="fa fa-check-square-o" aria-hidden="true"></i>All of pack 1 + </p>
                        <?php
                        if($this->model_welcome->get_featurs_for_package($pack_info['id'])){
                            $get_feature_info=$this->model_welcome->get_featurs_for_package($pack_info['id']);
                            foreach ( $get_feature_info as $feature){
                                if($this->model_welcome->get_feature_by_id($feature['feature_id'])){

                                                $feature_info=$this->model_welcome->get_feature_by_id($feature['feature_id']);


                                               

                        ?>
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i><?php  echo $feature_info['feature']; ?> </p>
                        
                         <?php
                                 }
                            }

                    ?>
                        
                        <div class="btn" style=" font-size: 14px; margin: auto; width: 50%; height: 40px;  background-color: #F0C30E; color: white;margin-top: 21px;border-radius: 18px 0px; ">
                            
                                <input id="option2" type="radio" name="package"  value="<?php  echo $pack_info['id']; ?>" class="" style="margin-bottom: 5px;">
                                <label for="option2">Select this</label>
                        </div>
                    </div>
                    <!--row4-->
                   <?php
                        }
                    }
                   ?>

                </div> 
                <!--package 3-->
                <div class="col-lg-4"  >
                    <?php
                    
                    if($this->model_welcome->get_package_by_id(3)){
                        $pack_info=$this->model_welcome->get_package_by_id(3);
                    
                    
                    
                    ?>
                    <!--row1-->
                    <div style=" height: 50px;background-color: #00B9D7; color: white;">
                        <p style="padding: 10px;text-align: left;font-size: 16px;font-weight: 600;"><?php echo $pack_info['pack_name'];?> Level</p>
                        
                    </div>
                    <!--row2-->
                    <div style=" height: 180px;color: #00B9D7; background-color: #374140; font-family: 'Oswald', sans-serif;">
                        
                        <p style=" padding-top: 28px;"><span style="    display: inline-block; vertical-align: top;">Rs</span><span style=" font-size: 80px;" ><?php echo $pack_info['price'];?></span>/ year</p>
                    </div>
                    <!--row3-->
                    <div style=" height: 250px;  color: #b7b0b0; padding-top: 27px; box-shadow: 1px 1px 1px 1px #c0c0c0;">
                        
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i>All of pack 2 + </p>
                        <?php
                        if($this->model_welcome->get_featurs_for_package($pack_info['id'])){
                            $get_feature_info=$this->model_welcome->get_featurs_for_package($pack_info['id']);
                            foreach ( $get_feature_info as $feature){
                                if($this->model_welcome->get_feature_by_id($feature['feature_id'])){

                                                $feature_info=$this->model_welcome->get_feature_by_id($feature['feature_id']);


                                               

                        ?>
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i><?php  echo $feature_info['feature']; ?> </p>
                        
                         <?php
                                 }
                            }

                    ?>
                        
                        <div  class="btn" style=" font-size: 14px; margin: auto; width: 50%; height: 40px;  background-color: #00B9D7; color: white;margin-top: 21px;border-radius: 18px 0px; ">
                            
                            <input id="option3" type="radio" name="package"  value="<?php  echo $pack_info['id']; ?>" class="" style="margin-bottom: 5px;">
                            <label for="option3">Select this</label>
                        </div>
                    </div>
                    <!--row4-->
                   <?php
                        }
                    }
                   ?>

                </div> 
                
                
     <!------------------------------------------------------------------------------------------------------------------------->              
<!--           <div class=" courses_content"> 
               
               <?php
//        if($this->model_welcome-> get_all_packages()){
//            $package_info=$this->model_welcome-> get_all_packages();
//            foreach ($package_info as $package) {
//       
             ?>   
                     package 
                <div class="course">
                    <div class="img_wrapper" style=" height: 250px; background-color: azure;">
                        
                        <div style="padding: 20px;">
                                <p style="font-size: 27px; color: currentColor;" > <?php //echo $package['pack_name'] ?> level  </p>
                                <p style="font-size: 18px;">Free trial period <?php //echo $package['trial_period'] ?></p>
                                <p style="font-size: 17px;">Initial payment <?php //echo $package['initial_payment'] ?></p>
                                <p style="font-size: 20px; color: chocolate;">Payment per year <?php //echo $package['price'] ?></p>
                                
                            </div> 
                        
                                
                                <div class="img_overflow">
                                    <p style="font-size: 18px;color: whitesmoke">
                                    <?php
//                                    if($this->model_welcome->get_featurs_for_package($package['id'])){
//                    
//                                        $get_feature=$this->model_welcome->get_featurs_for_package($package['id']);
//                                        foreach ($get_feature as $feature) {
//                                            //print_r($feature);
//                                            if($this->model_welcome->get_feature_by_id($feature['feature_id'])){
//
//                                                $feature_info=$this->model_welcome->get_feature_by_id($feature['feature_id']);
//
//
//                                               echo $feature_info['feature'].', ';
//                                            }
//
//                                        }
//                                    }
                          
                                
                                    ?>
                                </p>
                                    
                                   
                                    <a href="<?php //echo site_url('package/index/'.$package['id']) ?>">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                            <p class=" pack_link_text ">More Details</p>
                                    </a>
                                        
                                </div>
                        </div>
                        
                        <div class="btn theme_btn">
                        <input type="radio" name="package"  value="<?php //echo $package['id']; ?>" class="radio-style"><span style="padding: 10px;">Select This</span>
                        </div>
                </div>
                End Course Box 
                
      <?php  

//            }
//        }
         ?>          
             
           </div>          -->
         <!----------------------------------------------------------------------------------------------------------------------------------------->             
                    
        </div>
                    <!--end of package area----------------------------->
                
                <div class=" form-group" style="  text-align: center; padding: 14px 0px;">

                        <a href="<?php echo site_url('form2') ;?>" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding: 2px 10px;"></i> Go back</a>

                        <button type="submit"  class="btn btn_submit">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true" style="padding: 2px 10px;"></i></button>
                        
                </div>
            </form>

        </div>
        <!--form end-------------------------->

        <div>

        </div>
    </div>
    <!--form area end--------------------->

</div>

</body>
</html>

