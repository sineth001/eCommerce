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
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <!--font-family: 'Gloria Hallelujah', cursive;-->
        <style>
        
            .body-wrapper{
/*                color:;  */
                /*background-image: url(<?php echo base_url('css/images/main_image.jpg') ;?>);*/
                margin-top: 60px; 
                /*background-size: cover;*/ 
                /*background-color: #f0e3f2;*/
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
            .btn_paynow{
                
                padding: 10px 18px 10px 18px;
                background-color: #43e04d;
                width: 100%;
                box-shadow: 1px 1px 8px 5px grey;
                
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
            .course{
                border: 1px solid #eee;
                box-shadow: 0 0 7px -1px #eee;
                margin: 15px;
                width: 220px;
            }
            .features{
                font-size: 20px;
                line-height: 32px;
                background-color: #73c490;
                box-shadow: 1px 1px 25px 2px #fff;
                text-align: left;
                padding: 4px 4px 4px 23px;
                color: #fff;
            }
            .btn:hover, .btn:focus {
                color: gray;
                text-decoration: none;
            }
            .feature-wrapper{
                padding: 10px;
                margin: 18px 48px;
                box-shadow: 2px 3px 12px 0px #c0c0c0;
            }
            .btn_submit{
                padding: 10px 135px;
                background-color: #37cbd3;
                margin: 0 8px;
                
            }
            .btn_goback{
                
                padding: 10px 60px;
                background-color: #1f9ca3;
                margin: 0px 8px;
            }
            .featuer-icon {
                    font-size: 17px;
                    padding: 10px;
                    color: #1C9A71;
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
        <ul class="nav navbar-nav " style="    padding: 10px 10px 10px 20px;">
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
     
<div class=" container body-wrapper">
    
     
    <!--row1-->
    <div class="row">
        <div class="col-lg-7"  style=" height: 70px;background-color: #486361">
            <p style="     font-size: 29px;padding: 10px;color: whitesmoke;"><?php echo $pack_name; ?> Level</p>
        </div>
        <div class="col-lg-5" style=" height: 70px;background-color: #809e9b">
            <p style="    font-size: 17px;padding: 13px;color: #f7135b;font-weight: 800;text-align: center; ">Rs   <span style=" font-size: 30px;"><?php echo $price; ?></span>  per year</p>
        </div>
    </div>
    <!--row2 feature area-->
    
    <div class="row" style="  background-color: #EFEFEF; color: #818989">
        
        <p style="font-size: 25px; padding: 10px 10px 0px 25px;">Features</p>
        
        <div style="padding-top : 10px;">
            
            <?php
            
            if($id>=1){

                    $features = $this->model_welcome->get_featurs_for_package(1);

                    // print_r($features);

                     if( count($features)){

                         foreach( $features as $f ){

                              $feature_info = $this->model_welcome->get_feature_by_id( $f['feature_id'] );
                              
            ?>
                                <div class="col-lg-3 feature-wrapper" style=" height: 50px; ">
                                    <p><i class="fa fa-check-square featuer-icon" aria-hidden="true"></i>  <?php echo $feature_info['feature']; ?></p>
                                 </div>

            <?php  
                            //          echo '<div class="features">'.$feature_info['feature'].'</div>';
                         }
                     }
            }
            if($id>=2){

                    $features = $this->model_welcome->get_featurs_for_package(2);

                    // print_r($features);

                     if( count($features)){

                         foreach( $features as $f ){

                              $feature_info = $this->model_welcome->get_feature_by_id( $f['feature_id'] );
            ?>
                                <div class="col-lg-3 feature-wrapper" style=" height: 50px; ">
                                    <p><i class="fa fa-check-square featuer-icon" aria-hidden="true"></i><?php echo $feature_info['feature']; ?></p>
                                 </div>

            <?php 
          //                    echo '<div class="features">'.$feature_info['feature'].'</div>';
                         }
                     }
            }
            if($id>=3){

                    $features = $this->model_welcome->get_featurs_for_package(3);

                    // print_r($features);

                     if( count($features)){

                         foreach( $features as $f ){

                              $feature_info = $this->model_welcome->get_feature_by_id( $f['feature_id'] );
            ?>
                                <div class="col-lg-3 feature-wrapper" style=" height: 50px; ">
                                    <p><i class="fa fa-check-square featuer-icon" aria-hidden="true"></i><?php echo $feature_info['feature']; ?></p>
                                 </div>

            <?php 
          //                    echo '<div class="features">'.$feature_info['feature'].'</div>';
                         }
                     }
            }
        ?> 
    
<!--            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                vdfvf
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
        
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            
        
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>
            <div class="col-lg-3 feature-wrapper" style="border : 1px solid black; height: 50px; ">
                
            </div>-->
            
        </div>
        
    </div>
    <!--row3-->
    <div class="row" style=" background-color: #374140; color: whitesmoke;">
        <p style="    font-size: 20px;text-align: center;padding: 15px;">Initial payment Rs: <?php echo $initial_payment; ?></p>
        
        <p style="    font-size: 17px;padding: 0px 35px 10px 35px;">Now you can pay the initial payment for this package and get start.
            If you are not going to pay now,you can get a free trial period of<span style="color: #8211FF"> <?php echo $trial_period ; ?></span> for this package.</p>
        <p style="    font-size: 20px;color: #ada4a4; padding: 10px;">Description of package</p>
        <p style="padding: 0px 31px 20px 31px;color: #ada4a4;"><?php echo $description; ?></p>
    </div>
    <!--row4-->
    <div class="row" style=" height: 150px ; background-color: #d5ebed">
        
        <div class=" " style="  text-align: center; padding: 44px 0px;">

            <a href="<?php echo site_url('first_login/logout') ?> " class="btn btn_goback"><i class="fa fa-train" aria-hidden="true" style="padding: 2px 10px;"></i> Get started with free trial</a>
            <a href="<?php echo site_url('payment/index/'.$id.'/'.$pack_name.'/'.$initial_payment) ?>" class="btn btn_submit"><i class="fa fa-money" aria-hidden="true" style="padding: 2px 10px;"></i></i> Pay now</a>
         
        </div>
    </div>
</div>
 
</body>
</html>
    



