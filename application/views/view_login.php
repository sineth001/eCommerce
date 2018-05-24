<!DOCTYPE html>
<html lang="en">
<head>
	<title>eCommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <link href="<?php echo base_url('css/css/master.css') ;?> " rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
        
	<link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ;?> " rel="stylesheet" type="text/css" />
        <link href="http://localhost/ecommerce/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--font-family: 'Lato', sans-serif;-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet"> 
        <!--font-family: 'Oswald', sans-serif;-->
        <style>
            .body-wrapper{
/*                color:;  */
                /*background-image: url(<?php echo base_url('css/images/main_image.jpg') ;?>);*/
                /*margin-top: 60px;*/ 
                background-size: cover; 
                background-color: #c0c6c6;
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
                padding: 10px 52px 10px 52px;
                background-color: #8211FF;
                margin: 0 1px;
                
            }
            .btn_goback{
                
                padding: 10px 5px 10px 5px;
                background-color: #93eaa9;
                margin: 0 1px;
                
            }
            .btn{
                border-radius: 0px;
                color: #ffffff;
                font-size: 19px;
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
            .form-wrapper {
                width: 42%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 100px;
                 /*margin-top: 60px;*/ 
                color: darkgray;
            }
            .form-topic-style{
                width: 43%;
                margin: auto;
                text-align: left;
                background-color: #db4b4b;
                margin-top: 80px;
                color:#ffffff;  
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
     
<div class=" container body-wrapper" style="    color: gray; ">
    
    <!--header-->
    <div class="row form-topic-style" >
            <h3 style=" padding: 8px 14px 14px 41px; ">Login </h3>
        
    </div>
    <!--form area--------------------------------------------------------------------->
    <div class="row">
        
        <!--form-- ------------------>
        <div class="form-wrapper" >

                <!--error area-->
            <div style="color: red;">
               
                <p><?php if($this->session->flashdata('flash_data')) {
                                echo $this->session->flashdata('flash_data');
                            } ?>
                </p>
            </div>
            

            <form class="form" action="<?php echo site_url('login') ?>" method="post">


                <div class="form-group">
                    <div class="row form-error" style="height : 17px; color: red;">
                        <?php echo form_error('email'); ?>
                    </div>
                    <label class="label-style" >Email </label>
                    <input type="text" name="email" placeholder="Enter your email " value="<?php echo set_value('email'); ?>" class=" form-style form-control "  style=" ">
                </div>

                <div class="form-group">
                    <div class="row form-error" style="height : 17px; color: red;">
                        <?php echo form_error('password'); ?>
                    </div>
                    <label class="label-style">Password </label>
                    <input type="password" name="password" placeholder="Enter your pasword" class="form-control form-style"  style=" ">
                </div>

                <div class=" form-group" style="  text-align: center;     padding: 20px 0 70px 0;">

                    <a href="#" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding-right: 4px;"></i>Forgot password </a>

                    <button type="submit"  class="btn btn_submit">Login <i class="fa fa-sign-in" aria-hidden="true" style="padding-left: 4px;"></i></button>

                </div>
            </form>

        </div>
        <!--form end-------------------------->

        
    </div>
    <!--form area end--------------------->

</div>
 
</body>
</html>
    


