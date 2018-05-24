<!DOCTYPE html>
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
/*                color:;  */
                /*background-image: url(<?php echo base_url('css/images/main_image.jpg') ;?>);*/
                margin-top: 60px; 
                /*background-size: cover;*/ 
                width: 50%;
                background-color: gray;
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
                padding: 10px 60px 10px 60px;
                background-color: #8211FF;
                margin: 0 55px;
                
            }
            .btn_goback{
                
                padding: 10px 18px 10px 18px;
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
    

     
<div class=" container-fluid body-wrapper" style=" text-align: center; ">
    
    <div style="width: 70%; margin: auto;background-color: whitesmoke;padding: 46px;">
        
        <p style="    margin: 30px; font-size: 31px; color: #a0aaa9;"><i class="fa fa-check-circle" aria-hidden="true" style=" color: green"></i> You have Successfully registered to Ecommerce.lk ! </p>
        <p style="    margin-bottom: 57px;font-size: 19px; color: #6b7a78;"> Please check your email inbox to validation and more details....  </p>
        <a href="<?php echo site_url('myprofile'); ?>" class="btn btn_submit">View Profile</a>
    </div>

</div>

</body>
</html>
    


