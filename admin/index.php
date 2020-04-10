<?php
include "./include/connection.php";?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoot.in | Login </title>

    <!-- MOBILE -->
    
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- JS HELPERS -->   
    
    <script src="assets/js/lib/modernizr.min.js"></script> 
    <script src="assets/js/custom/mobiledevices.min.js"></script>  
   
	<!-- CSS -->    
   
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lib/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/custom/login.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- CSS THEME -->
    
    <link rel="stylesheet" href="assets/css/custom/themes/default.min.css" /> 
      
</head>
    <body id="page--login">
        
<!-- @  .styleswitcher -->
        
        <div class="styleswitcher">
            
                  
        </div>     

        
        <div class="backdrop colorset--primary"></div>

        <div class="lr__container">
            
<!-- @ ~~~~ .lr__box --> 
            
            <div class="lr__box clearfix">              

              
                    <form method="post" action="login_code.php" id="f1" name="f1">				
                    <center><h3><font color="black" size="4px">WELCOME BACK TO SHOTT! <i class="fa fa-heart"></i></font></h3>
					  <p><font color="black" size="2px">Login to your account below</font></p></center>
					  <br>
					   <div class="infor"><span class="icon"><i class="icon-user"></i></span>
                 
					<div class="formfield__labelin">
                        
                        <label><font color="black" size="2px"> <i class='fa fa-user'></i>  Email</font></label>
                        <input name="email" type="text" class="form-control" placeholder="Email"/>
                    
					</div>
					
                    <div class="infor"><span class="icon"><i class="icon-key"></i></span></div>
                    
					<div class="formfield__labelin">
                        <label><font color="black" size="2px">
                        <i class="fa fa-key"></i> Password</font></label>
                        <span class="extralabel" data-trigger="password"><font color="black" size="2px">Show</font></span>
                        <input name="password" type="password" class="form-control"  placeholder="password"/>
                    </div>
                    </div>
                   

                   
                    <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block mt-12"/>
                    
					<?php
				if(isset($_REQUEST['q1']))
				{
					
				
				?>
				<center><p style="margin-top:20px;"><font color="red" size="2px">Invalid Email or Password !</font></p></center>
				<?php
				}
				?>
                </form>

            </div><!-- // .lr__box --> 
            

<!-- @ ~~~~ .lr__footer --> 
            
            <div class="lr__footer">
                
                <div class="float-left">
                    <p><font color="white" size="3px">© 2019 Shott.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DESIGNED BY Bansri Meruliya&nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></font></p>
                </div>
               
                
            </div><!-- // .lr__footer -->  
            
        </div><!-- // .lr__container --> 
		
		<!-- JS LIBRARIES --> 

		<script src="assets/js/lib/jquery.3.3.1.min.js"></script>
		<script src="assets/js/lib/bootstrap.min.js"></script>

		<!-- JS --> 

		<script src="assets/js/custom/global.min.js"></script>

		<!-- JS PER PAGE -->      

		<script src="assets/js/custom/login.page.min.js"></script>
		
		<script src="assets/js/custom/demo.js"></script> 
        
    </body>

<!-- Mirrored from themes.creativemilk.net/files/espresso/purpleheart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 10:32:09 GMT -->
</html>