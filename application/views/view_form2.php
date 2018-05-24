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
                padding: 10px 63px;
                background-color: #e58f67;
                margin: 0 8px;
                
            }
            .btn_goback{
                
                padding: 10px 58px;
                background-color: #93eaa9;
                margin: 0px 8px;
                
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
                background-color: #6366a8;
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
        <div class="row form-topic-style" >
            <h3 style=" padding: 8px 14px 14px 41px; ">Business Information</h3>
        
        </div>
        <!--form area--------------------------------------------------------------------->
        <div class="row">
            <!--error area-->
            
            <!--form-- ------------------>
            <div  class="form-wrapper" style=" ">
                
                
                
                <form class="form" action="<?php echo site_url('form2') ?>" method="post">
                        

                    <div class="form-group">
                        <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('store_name'); ?>
                        </div>
                        <label class="label-style" >Store name </label>
                        <input type="text" name="store_name" placeholder="Store name" value="<?php echo set_value('store_name'); ?>" class=" form-style form-control "  style=" ">
                    </div>


                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('st_address'); ?>
                        </div>
                        <label  class="label-style">Street Address </label>
                        <input type="text" name="st_address" placeholder="Street address" value="<?php echo set_value('st_address'); ?>" class="form-style form-control  " style=" ">
                    </div>
                    
                    
                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('postal_code'); ?>
                        </div>
                        <label class="label-style"> Postal Code </label>
                            <input type="text" name="postal_code" placeholder="Postal code" value="<?php echo set_value('postal_code'); ?>" class="form-control form-style "  style=" ">
                    </div>

                    <div class="form-group">
                         <div class="row form-error" style="height : 21px;">
                            <?php echo form_error('city'); ?>
                        </div>
                        <label  class="label-style">City </label>
                            <input type="text" name="city" placeholder="City" value="<?php echo set_value('city'); ?>" class="form-control form-style "  style=" ">
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
                   
                    <div class=" form-group" style="  text-align: center;  padding: 22px 0px;">

                        <a href="<?php echo site_url('form1') ;?>" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding: 2px 10px;"></i> Go back</a>

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

