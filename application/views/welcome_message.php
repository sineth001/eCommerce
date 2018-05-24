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
        <style>
            .form-control.email {
                
                
                border-radius: 0;
            }
            .btn.getstarted_btn {
                background-color: #8211FF;
                border-radius: 0;
                color: #fff;
                
                
            }
            .btn.getstarted_btn2 {
                background-color: #412065;
                border-radius: 0;
                color: #fff;
                
                
            }
            .nav-style a,.nave-style.btn{
                color: black;
                font-size: 16px;
                border-radius: 0;
                
            }
            a{
               
                padding: 20px;
            }
            .row1-content{
/*                position: absolute;
                top:0;
                left: 0;
                right:0;
                bottom: 0;
                width:50%;
                height: 50%;
                margin: auto;*/
            }   
            .mynav{
                
                margin-left: -15px;
                margin-right:0px;
                margin-bottom: -21px;
            } 
            
            .nav-bottom a{
                font-size: 11px;
                color: #6A6A6A;
                text-decoration: none;
                
            }
            
            .icon-wrapper{
                
                
                height: 170px;
                width: 170px;
                border-radius: 100%;
                background-color: #8C42DD;
                color: #ffffff;
                margin: auto;
                
            }
            .icon-style{
                    font-size: 63px;
                    padding: 52px;
            }
            
            .icon-title{
                 
                font-size: 21px;
                padding: 16px;
            }
            .form-error{
                color: rgb(255, 0, 92);
                font-size: 21px;
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
          <li style=" padding: 10px 10px 10px 20px;"><a href="<?php echo site_url('login'); ?>"> Login</a></li>
          <li ><a class="btn" style="float :right; background-color: #8211FF; color: #FFFEFF; padding: 21px;font-size: 21px; " href="#">
                  <i class="fa fa-rocket" style="font-size:  27px; padding-right: 6px;" aria-hidden="true"></i>
                  GET STARTED</a></li>
        </ul>
      </div>
    </nav>

    
</div> 
  
    
<div class="container-fluid " style="text-align: center;  ">    
<!--row1--------------------------------------------------------------->
<div class="row row1-content" style="  color:#ffffff;  background-image: url(<?php echo base_url('css/images/main_image.jpg'); ?>) ; background-size: cover;  ">
        
        <div class="" style=" padding-top: 207px;padding-bottom: 24px;">
            <h1> OWN YOUR OWN E COMMERCE PLATFORM </h1>
            <p>Tri ecommerce.lk free for 30 days.No risk,and no credit card required.</p>
        </div>
    
        <div class="" style="padding-bottom: 204px;">
            <div class=" form-error" style="height : 40px;">
                
                <?php echo validation_errors(); ?>
            </div>
            
            
            <form  action=" <?php echo site_url('welcome');  ?> " method="post" class=""  style="    margin: auto; width:  60%; ">
                <div class="input-group" style="">
                    <input type="text"  name="email" class="form-control email" placeholder="Enter your email address " style=" height: 65px; border-radius: 0;opacity: 0.9;">
                  <div class="input-group-btn">
                      <button class="btn getstarted_btn " type="submit" style="padding: 20px;">
                      <i class="fa fa-rocket" style="font-size: 21px; padding-right: 6px;" aria-hidden="true"></i>
                      GET STARTED
                    </button>
                  </div>
                </div>
            </form>
        </div>
            
        
    </div> 
   <!--row2---------------------------------------------------------------------------------> 
   <div class="row">
        <div class="col-lg-6" style=" height: 400px;    text-align: left;padding: 55px;">
            <p style="font-size: 36px;">Who we are</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            <br>    
            <p> cillum dolore eu 
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                mollit anim id est laborum</p>
        </div>
        <div class="col-lg-6" style=" height: 400px;">
          
          
            <img style="margin-top: 72px;" src="<?php echo base_url('css/images/about_content_image.png')?>">
        </div>
    </div>
   <!--row3---------------------------------------------------------------------------------> 
   <div class="row" style="  background-image: url(<?php echo base_url('css/images/steps_image_bg.jpg')?>);color: #ffffff;">
       
       <div class="" style="padding: 30px;">
           <p style="font-size : 36px;">HOW IT WORKS</p>
           <p style="font-size : 20px;">STARTING YOUR OWN ECOMMERCE PLATFORM IS EASY AS 123 </p>
       </div>
       <div class="row"  style="margin :auto; text-align: left;">
           <div class="col-lg-4" style=" padding: 40px;">
               <p style="  font-size: 74px; color: #7340A7;">1.</p>
               <h2> Sign up for a free account </h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
           </div>
           <div class="col-lg-4" style="  padding: 40px;">
               <p style=" font-size: 74px; color: #7340A7; ">2.</p>
                <h2> Sign up for a free account </h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
           </div>
           <div class="col-lg-4" style=" padding: 40px;">
               <p style=" font-size: 74px; color: #7340A7; ">3.</p>
                <h2> Sign up for a free account </h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
           </div>
           
       </div>
       <div class="" style=" padding-bottom: 50px;">
           
            <div class=" form-error" style="height : 40px;">
                  <?php echo validation_errors(); ?>
            </div>
           
           <form action=" <?php echo site_url('welcome');  ?> " method="post" class=""  style="    margin: auto; width: 60%;">
              
                <div class="input-group" style="">
                    <input type="text" class="form-control email" placeholder="Enter your email address "
                           style=" height: 60px; border: 5px solid #7242A8;  background-color: #53317D; color :#ffffff;">
                  <div class="input-group-btn">
                      <button class="btn getstarted_btn2 " type="submit" style="padding: 18px;">
                          <i class="fa fa-rocket" style="font-size: 21px; padding-right: 6px;" aria-hidden="true"></i>
                      GET STARTED
                    </button>
                  </div>
                </div>
            </form>
       </div>
        
    </div>
   <!--row4---------------------------------------------------------------------------------> 
   <div class="row">
       <div class="">
           <p style="      margin-top: 46px; font-size: 29px;">WE HELP YOU TO GROW YOUR BUSINESS </p>
           
           <p style="width :80%; margin: auto; padding-bottom: 43px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
       </div>
       <div class="row" style="margin :auto;">
           <div class="col-lg-1"  ></div>
           
           <div class="col-lg-2" >
               <div  class="icon-wrapper"><i class="fa fa-briefcase icon-style" aria-hidden="true"></i></div>
               <p class="icon-title">SOCIAL MEDIA MARKETING</p>
           </div>
           
           <div class="col-lg-2" >
               <div class="icon-wrapper"><i class="fa fa-bolt icon-style" aria-hidden="true"></i></div>
               <p class="icon-title">BOOST ONLINE SALES</p>
           </div>
           
           <div class="col-lg-2" >
               <div  class="icon-wrapper"><i class="fa fa-bullhorn icon-style" aria-hidden="true"></i></div>
               <p class="icon-title">GET MORE VIEWS</p>
           </div>
           <div class="col-lg-2" >
               <div  class="icon-wrapper"><i class="fa fa-users icon-style" aria-hidden="true"></i></div>
               <p class="icon-title">SOCIAL MEDIA MARKETING</p>
           </div>
           
           <div class="col-lg-2"  >
               <div class="icon-wrapper"><i class="fa fa-rocket icon-style" aria-hidden="true"></i></div>
               <p class="icon-title">BOOST ONLINE SALES</p>
           </div>
           
           <div class="col-lg-1" ></div>
           
       </div>
       <div class=""> 
           <p style="padding: 40px;">dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
       </div>
    </div>
   <!--row5---------------------------------------------------------------------------------> 
   <div class="row"> 
       <div class="col-lg-6" style="height : 500px; text-align: left; background-color: #F0F0F0;padding: 0 49px 0 57px;">
           <div class="row" style="font-family : 'Oswald', sans-serif;"> 
                <p style="  padding-top: 172px; font-size: 18px;font-weight: 500;line-height: 36px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                <p style="font-size : 34px;margin-top: 20px;">Sanduni Perera</p>
                <p style="font-size : 19px;font-weight: initial;margin-top: -14px; color: #848283;">
                    OWNER OF GLITTER JEWELERY</p>
           </div>
       </div>
       <div class="col-lg-6" style="height : 500px;  background-image: url(<?php echo base_url('css/images/c.jpg') ?>);    background-size: cover;">
           
       </div>
    </div>
   <!--row6---------------------------------------------------------------------------------> 
   <div class="row" style="color: #ffffff;">
       <div class="col-lg-4" style="height : 400px;  background-color: #2F2F2F;">
           <div class="row" style=" width: 90%; margin: auto; text-align: initial;">
               
                <p style=" font-size :22px; padding: 38px 0 20px 0;">GET TO KNOW ABOUT US</p>
                
                
                <a  href="#" style="padding :0; margin :10px;"><img src="<?php echo base_url('css/images/e-commerce-gray.png') ?> "    style=" margin-bottom: 30px;"></a>
                
                <p style="  font-size: 13px; color: #909090; line-height: 27px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                         dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                         ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
           </div>
           
       </div>
        
        <div class="col-lg-4" style="height : 400px;  background-color: #252525;">
            <div class="row" style="height:100px;  color: #ffffff;">
                <p style="font-size: 20px; padding: 38px 0 38px 35px; text-align: left;">OWNING AN ONLINE STORE</p>
            </div>
            <div class="row nav-bottom" style="text-align:left;">
                <div class="col-lg-6" style="height:296px;font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><a href="#">SELL ONLINE</a></li>
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">EXAMPLE</a></li>
                        <li><a href="#">WEB SITE EDITOR</a></li>
                        <li><a href="#">ONLINE RETAIL</a></li>
                        <li><a href="#">ECOMMERCE WEBSITE </a></li>
                        <li><a href="#">THEMES</a></li>
                        
                    </ul >
                </div>
                <div class="col-lg-6" style="height:296px; font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><a href="#">SHOPPING CART</a></li>
                        <li><a href="#">ECOMMERCE HOSTING</a></li>
                        <li><a href="#">MOBILE ECOMMERCE</a></li>
                        <li><a href="#">ECOMMERCE SOFTWARE</a></li>
                        <li><a href="#">ONLINE STORE OUTSIDER</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="height : 400px;  background-color: #421D6A;">
            <div class="row" style=" width: 90%; margin: auto; text-align: initial;">
                <p style="font-size: 25px;  margin-top: 52px;">SIGN UP FOR A
                    <br> 30 DAY FREE TRIAL</p>

                <p style="  font-size: 12px; line-height: 27px;  margin-bottom: 36px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>

                <a href="#" class="btn getstarted_btn" style="background-color: #241534; width:100%; padding: 15px; font-size: 25px; ">
                    <i class="fa fa-rocket" style="font-size:  27px; padding-right: 6px;" aria-hidden="true"></i>
                    GET STARTED</a>
            </div>
        </div>
    </div>
</div>
    
    <footer class=" container-fluid" style="height: 40px; ">
        <p style="text-align: right; margin: 15px;"> Design by <img src="<?php echo base_url('css/images/maya-logo.png');?>" alt="maya Creations"></p>
    </footer>
    
</body>
</html>