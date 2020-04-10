<!DOCTYPE html>
<html class="no-js">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shott.in | Login</title>
    <meta name="description" content="Wolverine - Responsive Multipurpose HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/fonts/wolverine/styles.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic&amp;subset=latin,latin-ext,cyrillic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendors/full-page/jquery.fullPage.css">
    <!--Main stylesheet-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!--Modernizr js-->
    <script src="vendors/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script><style> .nav-main-menu > li > ul, .nav-shop-cart{display:none;}</style>
  </head>
  <body>
    
    <?php
	
	include "menu.php";
	?>
      
      <!--site header-->
      <!--end site header-->
      <section class="one-child page-under-construction-3-wrapper">
        <div data-stellar-background-ratio="0.25" style="background-image: url('assets/images/header-01.jpg');" class="page-common-background"></div>
        <div class="page-login-wrapper">
          <div class="page-login">
            <form action="login_code.php" method="post">
              <h3>WELCOME BACK!</h3>
              <p>Login to your account below</p>
              <div class="infor"><span class="icon"><i class="icon-user"></i></span>
                <input type="email" name="email" placeholder="Email Address" required>
              </div>
              <div class="infor"><span class="icon"><i class="icon-key"></i></span>
                <input type="password" name="password" placeholder="PassWord" required>
              </div>
			  <input type="hidden" name="scid" value="<?php echo $scid;?>">
			  
			  <?php

				if(isset($_REQUEST['q1']))
				{
					echo "<span style='color:red;'>Invalid Email Id Or Password</span>";
				}
				if(isset($_REQUEST['q2']))
				{
					echo "<span style='color:red;'>Invalid Email Id Or Password</span>";
				}
				
				?>
              <div class="remember">
                <label class="checkbox">
                
                </label>
                <p></p>
              </div>
              <div class="button"><input type="submit" name="submit" value="LOGIN" class="normal-btn normal-btn-main btn-size-5"></input></div>
              <div class="button"><a href="register.php?scid=<?php echo $scid;?>" class="border-btn border-btn-lightgray btn-size-5">SIGN UP</a></div>
            </form>
            <div class="back-to-home"><a href="index.php">BACK TO HOME</a></div>
          </div>
        </div>
      </section>
      
	  <?php
	  include "footer.php";
	  
	  ?>
	  
    <script src="vendors/jquery/jquery-1.11.2.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/js/main.js"></script>
    <script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='../../www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
    <script>setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol + "//script.crazyegg.com/pages/scripts/0040/7412.js?" + Math.floor(new Date().getTime() / 3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script>
  </body>

<!-- Mirrored from demo.9wpthemes.com/wolverine/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2019 10:14:14 GMT -->
</html>