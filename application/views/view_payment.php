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
            .btn:hover, .btn:focus{
                color: #fff;
                text-decoration: none;
                box-shadow: 1px 1px 4px 4px grey;
            }
            .form-error{
                color: rgb(255, 0, 92);
                font-size: 21px;
            }
            
            .form-style{
                border-radius: 5px;
                width: 70%;
                float: right;
               
            }
            .label-style{
                margin-top: 10px;
                padding-left: 20px;
            }
            
            .flex-container {
                display: -webkit-flex;
                display: flex;
                width: 100%;
              
            }
            .flex-container-2 {
                display: -webkit-flex;
                display: flex;
                width: 100%;
                justify-content : center;
                //class-> text-right 
                //height: 250px;
               
            }
            
            
            .flex-item2 {
                background-color: #93eaa9;
                width: 25%;
                //float: right;  
                color: white;
                margin:  15px;
                //float: right;
                //height: 2px;
               
                text-decoration: none;
            }

            .flex-item1{
                width: 100%;
                
                margin: 5px
            }
            .flex-item1>h3{
               background-color: #8f91c4; 
            }
            .flex-right {
                //background-color: ;
                width: 100%;
                height: 100%;
                //border: 1px solid black;
                padding: 10px;
                
                
               
               
                
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
          <li style=" padding: 10px 10px 10px 20px;"><a href="<?php echo site_url('login'); ?>"> Login</a></li>
          <li ><a class="btn" style="float :right; background-color: #8211FF; color: #FFFEFF; padding: 21px;font-size: 21px; " href="#">
                  <i class="fa fa-rocket" style="font-size:  27px; padding-right: 6px;" aria-hidden="true"></i>
                  GET STARTED</a></li>
        </ul>
      </div>
    </nav>
</div> 
     
 <div class="container">
      
    <div class=" row" >  

        <div class="col-lg-12" >

            <h2 style=" color: #cdd1f2; margin-top: 42px;" >MAKE PAYMENT</h2>
            
            <p style=" color: gray">You can select a payment method for your payment</p>

        </div>
        
        <div class="flex-container">
            <div class="flex-item1" >
                <h3 style=" padding: 20px;color: #ffffff;margin-bottom: 0px;"> eZ-cash <img src="<?php echo base_url('css/images/payment_methods_logoes/ezcash.png')?>" style="float: right;     width: 46px; height: 35px;"></h3>
                <div style="height : 178px; border : 1px solid #c0c0c0; text-align: center; font-family: 'Oswald', sans-serif;">
                    <p style="color: gray; padding: 10px 60px 0px 0px;">Package name</p>
                    <p style="font-size: 20px; color: #5876ce;"><?=$pack_name; ?> Level</p>
                    <P style="color: gray; padding: 10px 60px 0px 0px;">Initial payment</p>
                    <p style=" font-size: 29px ; color: #db4e82;">Rs: <?=$initial_payment; ?></p>
                </div>
                <a href="<?php echo site_url('payment/pay/ezcash'); ?>" class="btn btn_goback" style="width: 100%;margin: 0px;"> Pay now</a>
            </div>
            <div class="flex-item1" >
                <h3  style=" padding: 20px;color: #ffffff;margin-bottom: 0px;"> m-cash <img src="<?php echo base_url('css/images/payment_methods_logoes/mcash.png')?>" style="float: right; width: 58px; height: 40px; "></h3>
                <div style="height : 178px; border : 1px solid #c0c0c0; text-align: center; font-family: 'Oswald', sans-serif;">
                    <p style="color: gray; padding: 10px 60px 0px 0px;">Package name</p>
                    <p style="font-size: 20px; color: #5876ce;"><?=$pack_name; ?> Level</p>
                    <P style="color: gray; padding: 10px 60px 0px 0px;">Initial payment</p>
                    <p style=" font-size: 29px ; color: #db4e82;">Rs: <?=$initial_payment; ?></p>
                </div>
                <a href="<?php echo site_url('payment/pay/mcash'); ?>" class="btn btn_goback" style="width: 100%;margin: 0px;"> Pay now</a>
            </div>
            <div class="flex-item1" >
                <h3  style=" padding: 20px;color: #ffffff;margin-bottom: 0px;"> WebXpay <img src="<?php echo base_url('css/images/payment_methods_logoes/webxpay.png')?>" style="float: right; width: 62px; height: 22px; "></h3> 
                <div style="height : 178px; border : 1px solid #c0c0c0; text-align: center; font-family: 'Oswald', sans-serif;">
                    <p style="color: gray; padding: 10px 60px 0px 0px;">Package name</p>
                    <p style="font-size: 20px; color: #5876ce;"><?=$pack_name; ?> Level</p>
                    <P style="color: gray; padding: 10px 60px 0px 0px;">Initial payment</p>
                    <p style=" font-size: 29px ; color: #db4e82;">Rs: <?=$initial_payment; ?></p>
                </div>
                <a href="<?php echo site_url('payment/pay/webxpay'); ?>" class="btn btn_goback" style="width: 100%;margin: 0px;"> Pay now</a>
            </div>
            <div class="flex-item1" >
                <h3 style=" padding: 20px;color: #ffffff;margin-bottom: 0px;"> Checkout<img src="<?php echo base_url('css/images/payment_methods_logoes/checkout.png')?>" style="float: right; width: 56px; height: 26px; "></h3>
                <div style="height : 178px; border : 1px solid #c0c0c0; text-align: center; font-family: 'Oswald', sans-serif;">
                    <p style="color: gray; padding: 10px 60px 0px 0px;">Package name</p>
                    <p style="font-size: 20px; color: #5876ce;"><?=$pack_name; ?> Level</p>
                    <P style="color: gray; padding: 10px 60px 0px 0px;">Initial payment</p>
                    <p style=" font-size: 29px ; color: #db4e82;">Rs: <?=$initial_payment; ?></p>
                </div>
                <a href="<?php echo site_url('payment/pay/checkout'); ?>" class="btn btn_goback" style="width: 100%;margin: 0px;"> Pay now</a>
            </div>
        </div> 
    </div>
        
</div>
  
</body>
</html>

