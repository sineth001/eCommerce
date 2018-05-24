<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>eCommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <link href="<?php echo base_url('css/css/master.css') ?> " rel="stylesheet" type="text/css" />
        
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/ecommerce/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/ecommerce/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            
            .border-style{
                //border: 1px solid black;
                box-shadow: 1px 1px 1px 1px #c0c0c0;
                margin: 15px;
            }
            .flex-container-1 {
                display: -webkit-flex;
                display: flex;
                width: 100%;
                flex-wrap: wrap;
                
                padding: 59px 3px;
               
            }
             .flex-container-2 {
                display: -webkit-flex;
                display: flex;
                width: 100%;
                 flex-wrap: wrap;
                justify-content : center;
                
               
            }
            .flex-item1 {
                background-color: #000;
                width: 25%;
                //float: right;  
                color: gray;
                margin:  0;
                //float: right; 
                height: 250px;
                text-decoration: none;
                border-top: 1px solid #808988;
                border-left: 1px solid #808988;
                /*box-shadow: 1px 0px 2px 2px #59b7f2;*/
            }
            
            .flex-item2 {
                background-color: #000;
                width: 25%;
                //float: right;  
                color: white;
                margin:  15px;
                //float: right;
                /*height: 210px;*/
               
                /*text-decoration: none;*/
            }
            
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 100%;
                margin: auto;
                height: 700px;
                /*padding-top: 59px;*/
            }
            .img-style{
                width: 100%;
                height: 300px;
            }
            .img-style2{
                width: 100%;
                height: 206px;
            }
            .btn_view_item{
                
                padding: 13px 39px;;
                background-color: #f4da11;
                border-radius: 0px;
                font-size: 16px;
                color: #fff;
            }
            .list-header{
                    font-size: 15px;
                    color: orange;
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
            .btn:hover, .btn:focus {
                color: #fff;
            }
            
                
           
        </style>
        
</head>
<body class=""  style=" font-family: 'Lato', sans-serif ">
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
          
        
      </div>
    </nav>

    
</div> 
  
    
<div class="container-fluid " style="text-align: center ;color :#fff; background-color: #000000;  ">  
    <!--row 1-->
    
    <div class="row" style="">
      
      <!--carousel start-->
      
      
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
          <img src="<?php  echo base_url('css/images/heads/head5.jpg');?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Category 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php  echo base_url('css/images/heads/head2.jpg');?>" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Category 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php  echo base_url('css/images/heads/head3.jpg');?>" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Category 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php  echo base_url('css/images/heads/head4.jpg');?>" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Category 4</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      
      
      <!--carousel end-->
        
        
        
    </div>
    <!--row 2-->
    <div class="flex-container-1">
        <?php
            if($this->model_product->get_4_products()){

                $product_info=$this->model_product->get_4_products();
                foreach ($product_info as $product) {
                    
                

                    ?>
        <div class=" flex-item1">
            
            <div style="text-align: left;">
                <p style=" margin: 12px 14px;"><?php echo $product['title'].' <br> Rs: '.$product['price'] ;?></p>
            </div>
            <div>
                <img src="<?php  echo base_url($product['img_url']); ?>" class="img-style2" style="">
               
            </div>
        </div>

        
        <?php
            }
          }
        ?>
        
    </div>
    <!--row 3 short content-->
    <div class="row">
        <p style="font-size : 20px; color: orange;"> New arrivals </p>
    </div>
    <!--row 4-->
    <div class="flex-container-2">
        <?php
            if($this->model_product->get_all_product()){

                $product_info=$this->model_product->get_all_product();
                foreach ($product_info as $product){

                    
                    ?>
        
        <div class=" flex-item2">
            <div>
                <img src="<?php  echo base_url($product['img_url']);?> " class="img-style">
            </div>
            <div style="">
                <div class="col-lg-6">
                    <p style="margin-top: 15px;"><?php echo $product['title']; ?></p>
                </div>
                <div class="col-lg-6">
                    <a href="<?php echo site_url('theme/view_product_by_id/'.$product['id']); ?>" class="btn btn_view_item"> view product</a>
                </div>
            </div>
            
           
        </div>

         <?php
                }
            }
            ?>
    </div>
    <!--row 5-->
    <div class="row border-style" style="background-color: lightgrey;" >
        <div style=" border: 1px solid whitesmoke; height: 100px; padding: 25px;">
            <p style="color: orange;font-size: 28px;">Latest News</p>
        </div>
        <div >
            <div class="col-lg-4" style=" border: 1px solid whitesmoke; height: 200px; padding: 20px;">
                <p style="color: orange;text-align: left;">September 23, 2015</p>
                <p style="color: black; margin-top: 31px;">dolore magna aliqua. Ut enim ad</p>
                <a href="#" class="btn" style="color :black;">READ MORE...</a>
            </div>
            <div class="col-lg-4" style=" border: 1px solid whitesmoke; height: 200px; padding: 20px;">
                <p style="color: orange;text-align: left;">September 23, 2015</p>
                <p style="color: black; margin-top: 31px;">dolore magna aliqua. Ut enim ad</p>
                <a href="#" class="btn" style="color :black;">READ MORE...</a>
            </div>
            <div class="col-lg-4" style=" border: 1px solid whitesmoke; height: 200px; padding: 20px;">
                <p style="color: orange;text-align: left;">September 23, 2015</p>
                <p style="color: black; margin-top: 31px;">dolore magna aliqua. Ut enim ad</p>
                <a href="#" class="btn" style="color :black;">READ MORE...</a>
            </div>
        </div>
    </div>
    <!--row 6-->
   
    


   <!--row6 ---------------------------------------------------------------------------------> 
   <div class="row" style="color: #ffffff;">
       
        
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
                        <input type="text" name="subscriber_eamil" placeholder="Ente your email" class=" subscribe-form">
                        <button type="submit" name="subscribe" class="btn btn_view_item" >SUBSCRIBE</button>
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