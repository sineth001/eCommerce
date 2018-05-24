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
            .btn_goback{
                
                padding: 10px 80px 10px 80px;
                background-color: #30967e;
                border-radius: 0px;
                font-size: 16px;
                color: #fff;
            }
            .col-lg-4,.col-lg-6,.col-lg-9,.col-lg-8{
                padding: 0px;
                
            }
            .course {
                    margin: 0px;
                    width: 100%;
                
            }
            .price-style{
                   font-size: 35px;
                   color: orange
            }
            .course .btn {
                width: 46%;
                color :#c0c0c0
            }
            
            
            .btn_view_item{
                
                padding: 13px 67px;
                background-color: #d83d91;
                border-radius: 0px;
                font-size: 16px;
                color: #fff;
            }
            .list-header{
                    font-size: 15px;
                    color: #7242a8;
                    margin: 28px 18px 3px 18px;
            }
            .subscribe-form{
                    background: #2F2F2F;
                    height: 53px;
                    width: 58%;
                    border-color: #000;
                    text-align: center;
                    font-size: 18px;
            }
            .borders_demo{
                /*border: 1px solid black;*/
            }
            
            /*course box style*/
            .courses_content {
                margin-top: 0;
            }
            .course .img_wrapper .img_overflow {
                background-color: rgba(0, 0, 0, 0.6);
                transform: translateX(100%);
            }
            .course {
                 border: none; 
                 box-shadow: none; 
                
            }
            
            .row3-num-styl{
                font-size: 65px;
                color: red;
                font-weight: 600;
                margin-top: 30px
            }
            .row3-header{
                font-size: 21px;
            }
            .row3-content{
                color: #a39191;
            }
            .row3-btn{
                color: #333454;
            }
            .img-frame{
                height: 280px;
                margin: 0px;
                background-color: #e9cbf4;
                margin-top: 72px;
            }
            .img-style{
                height: 419px;
                margin: -70px;
            }
            .middle-area-text {
                text-align: center;
                background-color: #8f91c4;
                color: #fff;
            }
            .btn_view{
                border-radius: 0;
              
            }
            .btn {
                padding: 2px 0px;
                width: 60%;
                border-radius: 0;
                /*color: #7242a8;*/
                font-size: 20px;
                font-weight: 800;
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
        <ul class="nav navbar-nav navbar-right" style="    padding: 10px 10px 10px 20px;">
          <li ><a href="#">HOME</a></li>
          <li><a href="#">ABOUT </a></li>
          <li><a href="#">FEATURES </a></li>
          <li><a href="#">CAREERS</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
          
        
      </div>
    </nav>

    
</div> 
  
    
<div class="container-fluid " style="text-align: center;  ">    
<!--row1--------------------------------------------------------------->
<div class="row borders_demo" style="height: 500px; background-image : url(<?php echo base_url('css/images/heads/img_7.jpg') ?>); background-size: cover; " >
    
</div>
<!--row2--------------------------------------------------------------->
<div class="row">
    <div class="col-lg-4 borders_demo" style=" height: 300px;" >
        
        
        
                <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url( 'css/images/product/img_8.jpg' ); ?> " style=" height: 300px;">
                                <div class="img_overflow" style="background-color: rgba(244, 218, 17, 0.6);">
                                        
                                    <p style="font-size: 24px; color: white; ">CHECK OUR NEW GIVE AWAY</p>
                                        
                                </div>
                        </div>
                     
                </div>
                <!--End Course Box -->
        
    </div>
    <div class="col-lg-4 borders_demo" style=" height: 300px;">
        
        
         <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url( 'css/images/product/img_9.jpg' ); ?>" style=" height: 300px;">
                                <div class="img_overflow" style="background-color: rgba(52, 166, 219, 0.6);">
                                        
                                    <p style="font-size: 24px; color: white; ">CHECK OUR NEW GIVE AWAY</p>
                                        
                                </div>
                        </div>
                     
                </div>
                <!--End Course Box -->
        
    </div>
    <div class="col-lg-4 borders_demo" style=" height: 300px;">
        
         <!-- Course Box -->
                <div class="course">
                        <div class="img_wrapper">
                                <img src="<?php echo base_url( 'css/images/product/img_7.jpg' ); ?>" style=" height: 300px;">
                                <div class="img_overflow" style="background-color: rgba(52, 219, 52, 0.6);">
                                        
                                   
                                    <p style="font-size: 24px; color: white; ">CHECK OUR NEW GIVE AWAY</p>
                                    
                                </div>
                        </div>
                     
                </div>
                <!--End Course Box -->
        
    </div>
</div>
<!--row3--------------------------------------------------------------->
<div class="row">
    <div class="col-lg-4 borders_demo" style=" height: 310px; text-align: center;box-shadow: 1px -1px 1px 1px #c0c0c0;">
        <p class="row3-num-styl">1.</p>
        <p class=" row3-head">MAKE YOUR ORDER</p>
        <p class=" row3-content ">psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua.</p>
        <a href="#"  class="btn row3-btn" >READ MORE..</a>
    </div>
    <div class="col-lg-4 borders_demo" style=" height: 310px; text-align: center;box-shadow: 1px -1px 1px 1px #c0c0c0;">
        <p class="row3-num-styl">2.</p>
        <p class=" row3-head">PAYMENT PROCESS</p>
        <p class=" row3-content ">psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua.</p>
        <a href="#"  class="btn row3-btn" >READ MORE..</a>
    </div>
    <div class="col-lg-4 borders_demo" style=" height: 310px; text-align: center;box-shadow: 1px -1px 1px 1px #c0c0c0;">
        <p class="row3-num-styl">3.</p>
        <p class=" row3-head">24H DELIVERY</p>
        <p class=" row3-content ">psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua.</p>
        <a href="#"  class="btn row3-btn" >READ MORE..</a>
    </div>
</div>
<!--row4--------------------------------------------------------------->
<div class=" row borders_demo middle-area-text" style=" text-align: center;">
    <h2>TOP INTERESTING</h2>
    <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua.</p>
    
    
</div>
<h4 style=" text-align: left;">NEW ARRIVALS</h4>
<!--row5--------------------------------------------------------------->
<div class="row">
    <div class="col-lg-3 borders_demo" style="height: 450px;"> 
        <div class="row borders_demo img-frame" >
           <img src="<?php echo base_url( 'css/images/item/item_1.png' ); ?>" class=" img-style"> 
        </div>
        
        <a href="" class="btn" >view item</a>
        
    </div>
    <div class="col-lg-3 borders_demo" style="height: 450px;"> 
        <div class="row borders_demo img-frame" >
            <img src="<?php echo base_url( 'css/images/item/item_3.png' ); ?>" class=" img-style">
        </div>
        
        <a href="" class="btn" >view item</a>
        
    </div>
    <div class="col-lg-3 borders_demo" style="height: 450px;"> 
        <div class="row borders_demo img-frame" >
            <img src="<?php echo base_url( 'css/images/item/item_1.png' ); ?>" class=" img-style">  
        </div >
        
        <a href="" class="btn" >view item</a>
        
    </div>
    <div class="col-lg-3 borders_demo" style="height: 450px;"> 
        <div class="row borders_demo img-frame" >
            <img src="<?php echo base_url( 'css/images/item/item_3.png' ); ?>" class=" img-style">
        </div>
        <a href="" class="btn" >view item</a>
    </div>
</div>
<!--row6--------------------------------------------------------------->
<div class=" row borders_demo middle-area-text" style=" text-align: center;">
    <h2>PRODUCTS CATEGORIES</h2>
    <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua.</p>
    
    
</div>
<!--row7--------------------------------------------------------------->
<div class="row">
    <div class="col-lg-3 borders_demo" style="height: 300px; "> 
         <!-- Course Box -->
            <div class="course">
                    <div class="img_wrapper">
                            <img src="<?php echo base_url( 'css/images/product/img_7.jpg' ); ?>" style=" height: 300px; width :100%;">
                            <div class="img_overflow" style="background-color: rgba(214, 87, 87, 0.6);">


                                <p style="font-size: 30px; color: white; ">MEN</p>
                                <p style="font-size: 12px; color: white; padding-left: 10px; ">34 items</p>

                            </div>
                    </div>

            </div>
         <!--End Course Box -->
    </div>
    <div class="col-lg-3 borders_demo" style="height:300px;  "> 
         <!-- Course Box -->
            <div class="course">
                    <div class="img_wrapper">
                            <img src="<?php echo base_url( 'css/images/product/img_9.jpg' ); ?>" style=" height: 300px;">
                            <div class="img_overflow" style="background-color: rgba(107, 122, 229, 0.6);">


                                <p style="font-size: 30px; color: white; ">WOMEN</p>
                                <p style="font-size: 12px; color: white; padding-left: 10px; ">24 items</p>

                            </div>
                    </div>

            </div>
         <!--End Course Box -->
    </div>
    <div class="col-lg-3 borders_demo" style="height: 300px; "> 
         <!-- Course Box -->
            <div class="course">
                    <div class="img_wrapper">
                            <img src="<?php echo base_url( 'css/images/food/images.jpg' ); ?>" style=" height: 300px;">
                            <div class="img_overflow" style="background-color: rgba(200, 78, 219, 0.6);">


                                <p style="font-size: 30px; color: white; ">VEGITABLE</p>
                                <p style="font-size: 12px; color: white; padding-left: 10px; ">14 items</p>
                            </div>
                    </div>

            </div>
         <!--End Course Box -->
    </div>
    <div class="col-lg-3 borders_demo" style="height: 300px; " > 
         <!-- Course Box -->
            <div class="course">
                    <div class="img_wrapper">
                            <img src="<?php echo base_url( 'css/images/product/images5.jpg' ); ?>" style=" height: 300px;">
                            <div class="img_overflow" style="background-color: rgba(219, 198, 78, 0.6);">


                                <p style="font-size: 30px; color: white; ">CLOTHS</p>
                                <p style="font-size: 12px; color: white; padding-left: 10px; ">16 items</p>

                            </div>
                    </div>

            </div>
         <!--End Course Box -->
    </div>
</div>

<!--footer---------------------------------------------------------------------------------> 
   <div class=" row " style="color: #ffffff;">
       
        
        <div class="col-lg-7" style="padding-bottom: 104px;  background-color: #252525;">
           
            <div class="row nav-bottom" style="text-align:left;">
                <div class="col-lg-4" style="height:296px;font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header">CUSTOMER SERVICE</p></li>
                        <li><a href="#">SELL ONLINE</a></li>
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">EXAMPLE</a></li>
                        <li><a href="#">WEB SITE EDITOR</a></li>
                        <li><a href="#">ONLINE RETAIL</a></li>
                        <li><a href="#">ECOMMERCE WEBSITE </a></li>
                        <li><a href="#">THEMES</a></li>
                        
                    </ul >
                </div>
                <div class="col-lg-4" style="height:296px; font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header"> HELP</p></li>
                        <li><a href="#">SHOPPING CART</a></li>
                        <li><a href="#">ECOMMERCE HOSTING</a></li>
                        <li><a href="#">MOBILE ECOMMERCE</a></li>
                        <li><a href="#">ECOMMERCE SOFTWARE</a></li>
                        <li><a href="#">ONLINE STORE OUTSIDER</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-lg-4" style="height:296px; font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header">FOLLOW US</p></li>
                        <li><a href="#">SHOPPING CART</a></li>
                        <li><a href="#">ECOMMERCE HOSTING</a></li>
                        <li><a href="#">MOBILE ECOMMERCE</a></li>
                        <li><a href="#">ECOMMERCE SOFTWARE</a></li>
                        <li><a href="#">ONLINE STORE OUTSIDER</a></li>
                        
                        
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="col-lg-5" style="height : 400px;  background-color: #000;">
            <div class="row" style=" width: 90%; margin: auto; text-align: initial;">
                <p class="list-header" style="">NEWSLETTER</p>
                <p style="    padding: 18px"> Subscribe to get daily updates</p>
                <div style="    padding-left: 18px">
                    <form>
                        <input type="text" name="subscriber_eamil" placeholder="Ente your email" class=" subscribe-form" style="width: 94%;">
                        <button type="submit" name="subscribe" class="btn btn_view_item" style="width: 94%; padding: 7px 0px;" >SUBSCRIBE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
    
    <footer class=" container-fluid" style="height: 40px; ">
        <p style="text-align: right; margin: 15px;"> Design by <img src="<?php echo base_url('css/images/maya-logo.png');?>" alt="maya Creations"></p>
    </footer>
    
</body>
</html>