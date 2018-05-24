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
                
                height: 100%;
               
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
          <div class="container-fluid" style="border-bottom: 4px solid #8211FF;">
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

        
        <!--row1-->
        <div class="row">
       
 
            <div class=" flex-right" style=" padding-right: 50px;  ">
                
                
                
                <div class=" row" >  
                    
                        <div class="col-lg-12" >

                            <h2 style=" color: #cdd1f2;" >MAKE PAYMENT</h2>

                        </div>
                        <div class="flex-container">

                            <h3 class="flex-item1" style=" padding: 20px;color: #ffffff;"> Pay with paypal <img src="images/cards.jpg" style="float: right;  "></h3>
                              
                        </div> 
                            <div  class="flex-container-2">
                                <a href="#" class="btn btn_submit" style="margin-top: 10px;">Pay with paypal</a>
                            </div> 
                    

                        <div class="flex-container">

                            <h3 class="flex-item1" style=" padding: 20px;color: #ffffff;"> Card Payment <img src="images/cards.jpg" style="float: right;  "></h3>

                        </div>   
                 <div style=" box-shadow: 1px 1px 3px #adadad;">         
                    <div class=" flex-container" >   
                      <div class="flex-right" >


     <!--form start-------------------------------------------------------------------->          
                        <form class="form">




                                <div class="form-group">
                                    <label class="label-style" >Billing Address </label>
                                    <input type="text" name="billingaddress" class=" form-style form-control " placeholder="Billing Address" style=" ">
                                </div>




                                <div class="form-group">
                                    <label  class="label-style">Country</label>
                                    <input type="text" name="country" class="form-style form-control  " placeholder="Country" style=" ">
                                </div>



                                <div class="form-group">
                                    <label  class="label-style">Postcode </label>
                                        <input type="text" name="postcode" class="form-control form-style " placeholder="Postcode" style=" ">
                                </div>






                                <div class="form-group">
                                    <label class="label-style"> Telephone Number </label>
                                    <input type="text" name="email" class="form-control form-style" placeholder=" Telephone Number" style=" ">
                                </div>


    <!--                    </form>       -->


                    </div>

                        <div class="flex-right" >

       <!--                    <form class="form">-->



                                   <div class="form-group">
                                       <label class="label-style">Cardholder name</label>
                                           <input type="text" name="cardholdername" class="form-control form-style" placeholder="Cardholder name" style=" ">
                                   </div>




                                   <div class="form-group">

                                       <label class="label-style">Card Number</label>

                                       <input type="text" name="cardnumber" class="form-control form-style" placeholder="Card Number" style=" ">
                                   </div>



                                   <div class="form-group">
                                       <label class="label-style">Expire date</label>


                                        <select name="year" class="form-control form-style" style="width: 30%;">
                                               <option value="year" selected>yyyy</option>
                                               <option value="2015">2015</option>
                                               <option value="2016">2016</option>
                                               <option value="2017">2017</option>
                                               <option value="2018">2018</option>
                                               <option value="year">2019</option>
                                               <option value="year">2020</option>
                                               <option value="year">2021</option>

                                          </select>

                                       <select name="month" class="form-control form-style" style="width: 30%;  margin-right: 55px;">
                                               <option value="month" selected>mm</option>
                                               <option value="month">JAN</option>
                                               <option value="month">FEB</option>
                                               <option value="month">MAR</option>
                                               <option value="month">APR</option>
                                               <option value="month">MAY</option>
                                               <option value="month">JUN</option>
                                               <option value="month">JUL</option>
                                               <option value="month">AUG</option>
                                               <option value="month">SEP</option>
                                               <option value="year">OCT</option>
                                               <option value="year">NOV</option>
                                               <option value="year">DES</option>
                                          </select>

                                   </div>

                                   <div class="form-group">
                                       <label class="label-style" > Security code</label>
                                       <input type="text" name="securitycode" maxlength="4"  class="form-control form-style" placeholder="Security code" style="width :30%; margin-right: 220px;">
                                   </div>

                       </div>
                    </div>
                            <div class="flex-container-2">

                                <div class=" form-group" style="  text-align: center;">

                                    <a href="#" class="btn btn_goback"><<< Go back</a>

                                    <button type="submit"  class="btn btn_submit" style="    padding-left: 39px;padding-right: 39px;">
                                        Make payment >>></button>

                                </div>

                           </div> 
                        </form>
    <!--form end------------------------------------------------------------------------>
                    </div>       
                </div> 
            </div>
    
            
        </div>
        
        
        <!--------------------------------------------------------->
        <!--row2-->
        
            
            
        
        </div>
  
</body>
</html>

