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
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
        

        
        <style>
            .body-wrapper{
                color:#ffffff;  
                /*background-image: url(<?php // echo base_url('css/images/main_image.jpg') ;?>);*/
                margin-top: -21px; 
                /*background-size: cover;*/ 
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
            .btn_submit {
                padding: 10px 63px;
                background-color: #e58f67;
                margin: 0 9px;
            }
            .btn_goback{
                
                padding: 10px 58px;
                background-color: #93eaa9;
                margin: 0px 9px;
                
            }
            .btn{
                border-radius: 0px;
                color: #ffffff;
                font-size: 20px;
            }
            .form-error{
                color: rgb(255, 0, 92);
                font-size: 13px;
            }
            .form-wrapper {
                width: 94%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
            }
            .form-topic-style{
                width: 94%;
                margin: auto;
                text-align: left;
                background-color: #8F91C4;
                margin-top: 36px;
            }
            .btn:hover, .btn:focus {
                color: gray;
                text-decoration: none;
            }
           .border-style{
               /*border: 1px solid black;*/
               
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
          <li style=" padding: 10px 10px 10px 20px;"><a href="<?php echo site_url('login/logout'); ?>"> Logout</a></li>
          <li ><a class="btn" style="float :right; background-color: #8211FF; color: #FFFEFF; padding: 21px;font-size: 21px; " href="#">
                  <i class="fa fa-rocket" style="font-size:  27px; padding-right: 6px;" aria-hidden="true"></i>
                  GET STARTED</a></li>
        </ul>
      </div>
    </nav>

    
</div> 
     
<div class=" container-fluid body-wrapper" style=" ">
    <!--row1-->
    <?php echo $this->session->flashdata('success'); ?>
    <div class="row">
        <!--Your detail---------------------------------------------->
        <div class="col-lg-6 border-style" >
            
            <!--header-->
        <div class="row form-topic-style" style="">
            <h3 style=" padding: 8px 14px 14px 41px; ">Your Details</h3>
        
        </div>
            <div style=" " class="form-wrapper">
            
                <form class="form" action="<?php echo site_url('myprofile') ?>" method="post" >


                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('fname'); ?>
                        </div>
                        <label class="label-style" >First Name </label>
                        <input type="text" name="fname" placeholder="First name"  value="<?php if(isset($first_name)){ echo $first_name; } ?>" class=" form-style form-control "  style=" ">

                    </div>


                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('lname'); ?>
                        </div>
                        <label  class="label-style">Last Name </label>
                        <input type="text" name="lname" placeholder="Last name"  value="<?php if(isset($last_name)){ echo $last_name; } ?>" class="form-style form-control  " style=" ">
                    </div>


                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('tp'); ?>
                        </div>
                        <label  class="label-style">Phone </label>
                            <input type="text" name="tp" placeholder="T.P. number"  value="<?php if(isset($tp_no)){ echo $tp_no; } ?>" class="form-control form-style "  style=" ">
                    </div>


                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('email'); ?>
                        </div>
                        <label class="label-style"> Email </label>
                            <input type="text" name="email" placeholder="Email" value="<?php if(isset($email)){ echo $email; } ?>" class="form-control form-style "  style=" ">
                    </div>

                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                                <?php echo form_error('domain'); ?>
                            </div>
                        <label class="label-style"> Your domain </label>
                        <input type="text" name="domain" placeholder="your domain (E.g:-www.example.com)" value="<?php if(isset($domain)){ echo $domain; } ?>" class="form-control form-style"  style=" ">
                    </div>

                <!--</form>-->

            </div>
        </div>
        <!--business info---------------------------------------------------------------->
        <div class="col-lg-6 border-style" >
                <!--header-->
            <div class="row form-topic-style" style="">
                <h3 style=" padding: 8px 14px 14px 41px; ">Business Information</h3>

            </div>
            <div  class="form-wrapper" style=" ">
            
                <!--<form class="form" action="" method="post">-->
                        

                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('store_name'); ?>
                        </div>
                        <label class="label-style" >Store name </label>
                        <input type="text" name="store_name" placeholder="Store name" value="<?php if(isset($store_name)){ echo  $store_name; } ?>" class=" form-style form-control "  style=" ">
                    </div>


                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('st_address'); ?>
                        </div>
                        <label  class="label-style">Street Address </label>
                        <input type="text" name="st_address" placeholder="Street address" value="<?php if(isset($street_address)){ echo $street_address; } ?>" class="form-style form-control  " style=" ">
                    </div>
                    
                    
                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('postal_code'); ?>
                        </div>
                        <label class="label-style"> Postal Code </label>
                            <input type="text" name="postal_code" placeholder="Postal code" value="<?php if(isset($postal_code)){ echo $postal_code; } ?>" class="form-control form-style "  style=" ">
                    </div>

                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('city'); ?>
                        </div>
                        <label  class="label-style">City </label>
                            <input type="text" name="city" placeholder="City" value="<?php if(isset($city)){ echo $city; } ?>" class="form-control form-style "  style=" ">
                    </div>
                    

                        <div class="form-group">
                            <div class="row form-error" style="height : 21px;">
                                <?php echo form_error('district'); ?>
                            </div>
                            <label for="sel1" class=" label-style ">District:</label>
                            <select class="form-control form-style" name="district" id="sel1">
                                <option value="">select a district </option>
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option valuBadullae="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>
                                
                            </select>
                        </div>
                   
                

            </div>
        </div>
        <div class="col-lg-12 border-style" style=" height : 89px;background-color: #4e6c89;" >
            
            <button type="submit"  name="update" class="btn btn_goback" style="float: right;margin: 15px;">Update <i class="fa fa-arrow-circle-right" aria-hidden="true" style="padding: 2px 10px; "></i></button>
        </div>
    </div>
    </form>
    <!--row2-->
    <div class="row">
        <!--change theme -->
        <div class="col-lg-6 border-style"  >
                <!--header-->
            <div class="row form-topic-style" style="">
                <h3 style=" padding: 8px 14px 14px 41px; ">Theme Information</h3>

            </div>
            
            <div class="col-lg-8" style=" height: 500px;">
                <img src="<?php echo base_url($theme_img_url) ?>" style=" width: 95%;    margin: 19px 0px 1px 6px;">
            </div>
            <div class="col-lg-4" style=" height: 500px; ">
                
                <p style="font-size: 30px;text-align: center;padding-top: 36px;color: #aa8a8a;"><?php echo $theme_name; ?></p>
                
                <P style="    padding: 10px;margin: 7px 2px 50px 2px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</P>
                <a href="<?php echo site_url('change_theme') ?>" class="btn btn_goback" style="padding: 19px 29px;"><i class="fa fa-cog" aria-hidden="true" style="padding: 2px 10px;"></i> Change theme</a> 
            </div>
            
            
        </div>
        
        <!--package info-->
        <div class="col-lg-6 border-style"  style=" height: 616px; box-shadow: 1px 1px 3px 1px #C0C0C0;">
               <!--header-->
            <div class="row form-topic-style" style="">
                <h3 style=" padding: 8px 14px 14px 41px; ">Package Information</h3>

            </div>
                <?php
                   
                   if($this->model_welcome->get_user_package()){
                       $package_info=$this->model_welcome->get_user_package();
                       
                       
                  
                   
                   ?>
            
               <p style="text-align: center;font-size: 20px; padding: 74px;">You have <span style="font-size: 79px;"> 75 days </span> left</p>
               
               
               <div class=" form-group" style="  text-align: center;  padding: 22px 0px;">
                   
                  

<!--                        <a href="#" class="btn btn_goback" style="padding: 19px 29px;"> Change package</a>-->

                    <a href="<?php echo site_url('myprofile/user_package/'.$package_info['id']) ?>" target="_blank" class="btn btn_submit" style="padding: 19px 29px;"><i class="fa fa-eye" aria-hidden="true" style="padding: 2px 10px;"></i>  view package</a>
                        
                    <?php 
                  if($this->model_welcome->get_package_info_by_user_id()){
                      $user_package_info=$this->model_welcome->get_package_info_by_user_id();
                      if(empty($user_package_info['payment'])&&$user_package_info['payment']!=1){
                          echo '<a href='.  site_url("late_payment/index/".$package_info['id']."/".$package_info['pack_name']."/".$package_info['initial_payment'])
                                  .' class="btn btn_goback" style="padding: 19px 54px;"><i class="fa fa-money" aria-hidden="true" style="padding: 2px 10px;"></i> Pay now</a>';
                      }
                  }
                  
                  ?>
                    
                </div>
              <?php
                }
              ?>
            
        </div>
        
    </div>
    <!--row2-->
    <div class="row">
        <!--change password-->
        <div class="border-style" style=" height: 600px; width: 50%; margin: auto;">
            <div class="row form-topic-style" style="">
                <h3 style=" padding: 8px 14px 14px 41px; ">Change Password</h3>

            </div>
            <div style=" " class="form-wrapper">
 

            <form class="form" action="<?php echo site_url('myprofile/change_password') ?>" method="post" >

                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('pw'); ?>
                    </div>
                    <label class="label-style"> Password </label>
                        <input type="password" name="pw" placeholder="Password" class="form-control form-style "  style=" ">
                </div>


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('cpw'); ?>
                    </div>
                    <label class="label-style"> Confirm Password </label>
                    <input type="password" name="cpw" placeholder="Confirm password " class="form-control form-style"  style=" ">
                </div>
                <div style="text-align: right;">
                    <button type="submit"  class="btn btn_goback" style="">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true" style="padding: 2px 10px;"></i></button>
                </div>
                    

                </div>
            </form>

        </div>
        </div>
    </div>    
    
    

</div>

</body>
</html>