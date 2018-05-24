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
        
<!--        <script>
        window.onload = function() {
          var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
          recaptcha.required = true;
          recaptcha.oninvalid = function(e) {
            // do something
            alert("Please complete the captcha");
          }
        }
        
        var allowSubmit = false;
                        
        function capcha_filled () {
            allowSubmit = true;
        }

        function capcha_expired () {
            allowSubmit = false;
        }
        function check_if_capcha_is_filled (e) {
            if(allowSubmit) return true;
            e.preventDefault();
            alert('Fill in the capcha!');
        }
        </script>-->
        
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
                width: 42%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
            }
            .form-topic-style{
                width: 43%;
                margin: auto;
                text-align: left;
                background-color: #8F91C4;
                margin-top: 36px;
            }
            .btn:hover, .btn:focus {
                color: gray;
                text-decoration: none;
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
     
<div class=" container-fluid body-wrapper" style=" ">
    <!--header-->
        <div class="row form-topic-style" style="">
            <h3 style=" padding: 8px 14px 14px 41px; ">Your Details</h3>
        
        </div>
    <!--form area--------------------------------------------------------------------->
    <div class="row">
        <!--error area-->
        
        <!--form-- ------------------>
        <div style=" " class="form-wrapper">
 

            <form class="form" action="<?php echo site_url('form1') ?>" method="post" >


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('fname'); ?>
                    </div>
                    <label class="label-style" >First Name </label>
                    <input type="text" name="fname" placeholder="First name"  value="<?php echo set_value('fname'); ?>" class=" form-style form-control "  style=" ">
                    
                </div>


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('lname'); ?>
                    </div>
                    <label  class="label-style">Last Name </label>
                    <input type="text" name="lname" placeholder="Last name"  value="<?php echo set_value('lname'); ?>" class="form-style form-control  " style=" ">
                </div>


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('tp'); ?>
                    </div>
                    <label  class="label-style">Phone </label>
                        <input type="text" name="tp" placeholder="T.P. number"  value="<?php echo set_value('tp'); ?>" class="form-control form-style "  style=" ">
                </div>


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

                <div style=" text-align: center;"> 
                    
                    <div class="row form-error" style="height : 21px;">
                         <?php echo form_error('g-recaptcha-response'); ?>
                    </div>
                    
                    <div class="g-recaptcha" style="padding: 11px 22% 34px;" data-callback="capcha_filled"  data-expired-callback="capcha_expired" data-sitekey="6Lf_eR0UAAAAAMPR4f38fdFilCCjUEMwUgjYle_P"></div>
                </div>

                <div class=" form-group" style="  text-align: center;">

                    <a href="#" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding: 2px 10px;"></i> Go back</a>

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