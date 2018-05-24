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
            .border-style{
                //border: 1px solid black;
                box-shadow: 1px 1px  9px 1px #c0c0c0;
                margin: 15px;
            }
                
           
        </style>
        
</head>
<body class=""  style=" font-family: 'Lato', sans-serif; ">
    

    


    <div class="container" style="color: whitesmoke;">
    
    <?php
    if($this->model_product->get_product_by_id($id)){

        $product_info=$this->model_product->get_product_by_id($id);

            ?>
<!--heading--> 
    <div class="col-lg-12 border-style" style="    background-color: #d36767;">
        <h1 style="    padding: 11px 25px 15px 25px;"> <?php echo $product_info['title'] ; ?></h1>
    </div>
    
    <!--image--> 
    <div class="">
        <div class="col-lg-7 border-style" style="height :479px;">
            <img src="<?php echo base_url($product_info['img_url']); ?>" style=" width: 100%; height: 100%;">
        </div>
        
        
       <!--content-->
        <div class="col-lg-4 " style=" float: right;">
            <!--description--> 
            <div class=" border-style" style="height :150px; margin: 14px -15px;background-color: #6dbf67;"> 
                <p style="    padding: 21px; text-align: center;    font-size: 23px;"> 
                    <?php echo $product_info['description'] ; ?>
                </p>
            </div>
            <!--price-->
            <div class=" border-style" style="height :150px; margin: 14px -15px; background-color: #4487ce;">
                <p style="    padding: 17px 20px 1px 20px;font-size: 15px;color: #c7d6e5;">Price for the item</p>
                <p style="text-align: center; font-size: 39px;"> Rs : <?php echo $product_info['price'] ; ?></p>
            </div>
            <!--add to cart-->
            <div class="border-style" style="height :150px; margin: 14px -15px;    background-color: #db4a78;"> 
                <p style="padding: 24px; color: #c7d6e5;" >ns nic ununciec ineiecien ncencien ncnicn iencnec nicnc </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn_goback" style=" margin :auto;" ><i class="fa fa-shopping-cart" aria-hidden="true" style=""></i> Add to cart </a>
                </div>
            </div>
        </div>
        
    </div>
        
    <?php } ?>       
           
            
</div>


    <hr> 

    
   
    
</body>
</html>

