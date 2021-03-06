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
            
            
            .btn_view_item{
                
                padding: 13px 67px;
                background-color: #2be2b4;
                border-radius: 0px;
                font-size: 16px;
                color: #fff;
            }
            .list-header{
                    font-size: 15px;
                    color: #30967E;
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
            .box-style{
                border: 1px solid #eee;
                box-shadow: 0 0 7px -1px #eee;
                margin: 50px 30px 50px 30px;
            }
            .img-style{
                width: 100%;
                height: 96%;
            }
            .content-wrapper{
                margin: auto;
                width: 55%;
                padding-top: 60px;
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
         
          <li><a href="#">CONTACT SELLER</a></li>
        </ul> 
      </div>
    </nav>    
</div> 
  
    
<div class="container " style="text-align: center;  ">    
<!--row1--------------------------------------------------------------->
<?php
if($this->model_product->get_all_product()){
    
    $product_info=$this->model_product->get_all_product();
    foreach ($product_info as $product){
        
        if($product['id']%2==1){
        ?>

        <div class="row box-style" style="   ">
        <div class="col-lg-6" style="  height: 350px">
            <img src="<?php echo base_url($product['img_url']); ?>" title="5 best selling" style="" class="img-style">
        </div>
        <div class="col-lg-6" style="text-align: left;   height: 350px" >
            <div class="content-wrapper">
                <h1 style="margin-top: 36px;"><?php echo $product['title']; ?></h1>
                <p><?php  echo $product['description'].'<br>'; ?></p>
                <a href="<?php echo site_url('theme/view_product_by_id/'.$product['id']); ?>" class="btn btn_goback">view item </a>
            </div>
        </div>
        </div>

        <?php
        }else{
         ?>

        <div class="row box-style" style="">
        
        <div class="col-lg-6" style=" text-align: right;  height: 350px" >
            <div class="content-wrapper">
                    <h1 style="margin-top: 36px;"><?php echo $product['title']; ?></h1>
                    <p><?php  echo $product['description'].'<br>'; ?></p>
                    <a href="<?php echo site_url('theme/view_product_by_id/'.$product['id']); ?>" class="btn btn_goback">view item </a>
            </div>
        </div>
        <div class="col-lg-6" style=" height: 350px;">
            <img src="<?php echo base_url($product['img_url']); ?>" title="5 best selling" style="" class="img-style">
        </div>
        
        </div>

        <?php
            
        }
        
    }
}



?>

<hr> 
</div>
   <!--row6---------------------------------------------------------------------------------> 
   <div class=" container-fluid " style="color: #ffffff;">
       
        
        <div class="col-lg-7" style=" padding-bottom: 104px;  background-color: #252525;">
           
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
                        <input type="text" name="subscriber_eamil" placeholder="Ente your email" class=" subscribe-form" style=" width : 94%">
                        <button type="submit" name="subscribe" class="btn btn_view_item" style=" width : 94%" >SUBSCRIBE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    
    <footer class=" container-fluid" style="">
        <p style="text-align: right; margin: 15px;"> Design by <img src="<?php echo base_url('css/images/maya-logo.png');?>" alt="maya Creations"></p>
    </footer>
    
</body>
</html>