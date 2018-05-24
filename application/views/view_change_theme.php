<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>eCommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        
        <link href="http://localhost/ecommerce/css/css/master.css" rel="stylesheet" type="text/css" />
        
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/ecommerce/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--font-family: 'Lato', sans-serif;-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet"> 
        <!--font-family: 'Oswald', sans-serif;-->
        <style>
            .body-wrapper{
                color:#ffffff;  
                background-image: url(<?php echo base_url('css/images/main_image.jpg') ;?>);
                margin-top: -21px; 
                background-size: cover; 
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
                padding: 10px 80px 10px 80px;
                background-color: #8211FF;
                margin: 0 55px;
                
            }
            .btn_goback{
                
                padding: 10px 80px 10px 80px;
                background-color: #93eaa9;
                margin: 0 55px;
                
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
                font-size: 21px;
            }
            .theme-container{
                border : 1px solid black;
            }
            .course {
                border: 1px solid #eee;
                box-shadow: 0 0 7px -1px #eee;
                margin: 1px 8px 17px 5px;
                width: 49%;
                padding: 35px;
            }
            .btn.theme_btn, .btn.theme_btn:hover, .btn.theme_btn:focus {
                background-color: #b21c3f;
                border-radius: 0;
                color: #fff;
                font-weight: 600;
                text-transform: uppercase;
                width: 100%;
                padding: 15px;
            }
            
            
	</style>
</head>
<body class=""  style=" font-family: 'Lato', sans-serif; ">
    <div  class="row mynav" >
        <nav class="navbar nav-style">
          <div class="container-fluid" style="box-shadow: 1px 1px 12px 0px #c0c0c0;">
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
    <div class="container-fluid">
        
        <!--row1----------------------------------------------------->
        
            <div class=" courses_content">
                <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url('css/images/themes/theme1.png')?>">
                                <div class="img_overflow">
                                        
                                        <a href="<?php echo site_url('theme/index/1') ;?>" target="_blank">
                                                <i class="fa fa-search" aria-hidden="true"> VIEW</i>
                                                
                                        </a>
                                        
                                </div>
                        </div>
                        <a href="<?php echo site_url('change_theme/select_theme/1') ;?>" class="btn theme_btn">Select This</a>
                        
                </div>
                <!--End Course Box -->
                
                 <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url('css/images/themes/theme2.png')?>">
                                <div class="img_overflow">
                                        
                                        <a href="<?php echo site_url('theme/index/2') ;?>" target="_blank">
                                                <i class="fa fa-search" aria-hidden="true"> VIEW</i>
                                                
                                        </a>
                                        
                                </div>
                        </div>
                        <a href="<?php echo site_url('change_theme/select_theme/2') ;?>" class="btn theme_btn">Select This</a>
                        
                </div>
                <!--End Course Box -->
                
                 <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url('css/images/themes/theme3.png')?>">
                                <div class="img_overflow">
                                        
                                        <a href="<?php echo site_url('theme/index/3') ;?>" target="_blank">
                                                <i class="fa fa-search" aria-hidden="true">  VIEW</i>
                                                
                                        </a>
                                        
                                </div>
                        </div>
                        <a href="<?php echo site_url('change_theme/select_theme/3') ;?>"  class="btn theme_btn">Select This</a>
                        
                </div>
                <!--End Course Box -->
                
                 <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url('css/images/themes/theme4.png')?>">
                                <div class="img_overflow">
                                        
                                        <a href="<?php echo site_url('theme/index/4') ;?>" target="_blank">
                                            <i class="fa fa-search" aria-hidden="true">  VIEW </i>
                                                
                                        </a>
                                        
                                </div>
                        </div>
                        
                        
                       <a href="<?php echo site_url('change_theme/select_theme/4') ;?>" class="btn theme_btn">Select This</a> 
                </div>
                <!--End Course Box -->
                
            </div > 
            
        
        
        
        
    </div>



</body>
</html>
