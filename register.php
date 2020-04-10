<!DOCTYPE html>
<html class="no-js">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shott.in | Register</title>
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
  
  <script type="text/javascript">

function countryfunction()
{
	var id = document.getElementById("c").value;
	
	if(id != 0)
	{
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			//alert(xhttp.responseText);
			document.getElementById("s").innerHTML = xhttp.responseText;
			statefunction();
		}
		
	};
	xhttp.open("get","changecountry.php?id="+id,true);
	xhttp.send();
	}
}


function statefunction()
{
	var id = document.getElementById("s").value;
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			//alert(xhttp.responseText);
			document.getElementById("c1").innerHTML = xhttp.responseText;
		}
		
	};
	
	
	xhttp.open("get","changestate.php?id="+id,true);
	xhttp.send();
}

</script>
  
  </head>
  <body>
    <?php
	  include "menu.php";
	  
	  ?>
      <section class="one-child page-under-construction-3-wrapper">
        <div data-stellar-background-ratio="0.25" style="background-image: url('assets/images/header-01.jpg');" class="page-common-background"></div>
        <div class="page-rigsiter-wrapper">
          <div class="page-rigsiter">
            <form action="register_code.php" method="post">
              <h3> REGSITER NOW!</h3>
              <div class="name">
                <p>NAME</p>
                <input type="text" name="first_name" placeholder="First" required>
                <input type="text" name="last_name" placeholder="Last" required>
              </div>
              <p>ENTER YOUR EMAIL ADDRESS:</p>
              <input type="email" name="email" placeholder="Address your email." required>
				<?php
				if(isset($_REQUEST['q']))
				{
					echo "<span style='color:red;'>Email Id Already Registered</span>";
				}
				?>
              <p>CREATE YOUR PASSWORD:</p>
              <input type="password" name="password" required>
              <p>CONFIRM YOUR PASSWORD:</p>
              <input type="password" name="confirm_password" required>
			  <p>Mobile No.</p>
              <input type="text" name="mobile" required>
			  <p>Date Of birth</p>
              <input type="date" name="dob" required>
			  
			  
			  <p>Select Your Country</p>
			  <select name="country" id="c" onchange="countryfunction()" style="width: 100%;border: 1px solid #dddddd;-webkit-box-sizing: border-box;box-sizing: border-box;font-size: 12px;line-height: 16px;outline: none;padding: 13px;-webkit-transition: all 0.4s ease-in-out;transition: all 0.4s ease-in-out;font-family: 'Raleway', sans-serif;" required>
					<option selected="selected" value="0" disabled="disabled">Select Country</option>
                  
					<?php

					$sql1 = "select * from country";
					$result1 = mysqli_query($con,$sql1);

					while($row1=mysqli_fetch_array($result1))
					{
					?>
					<option value="<?php echo $row1['country_id'];?>"><?php echo $row1['country_name'];?></option>
					<?php
					}
					?>
			  </select>
			  
			  
			  
             <p>Select Your State</p>
			  
			  <select name="state" id="s" onchange="statefunction()" style="width: 100%;border: 1px solid #dddddd;-webkit-box-sizing: border-box;box-sizing: border-box;font-size: 12px;line-height: 16px;outline: none;padding: 13px;-webkit-transition: all 0.4s ease-in-out;transition: all 0.4s ease-in-out;font-family: 'Raleway', sans-serif;" required>
				<option selected="selected" value="0" disabled="disabled">Select State</option>
			  </select>
			  
			  
			  
			  
			  
			  <p>Select Your City</p>
			  <select name="city" id="c1" style="width: 100%;border: 1px solid #dddddd;-webkit-box-sizing: border-box;box-sizing: border-box;font-size: 12px;line-height: 16px;outline: none;padding: 13px;-webkit-transition: all 0.4s ease-in-out;transition: all 0.4s ease-in-out;font-family: 'Raleway', sans-serif;" required>
			  <option selected="selected" value="0" disabled="disabled">Select City</option>
			  </select>
			  <input type="hidden" name="scid" value="<?php echo $scid;?>">
			  
			  <span>By clicking “Create Account” you agree to the terms and conditions of the following:<a href="#">Universal Terms of Service</a>&nbsp;&nbsp;<a href="#">Privacy Policy</a></span>
              <div class="button">
			  <input type="submit" name="submit" value="Create Account" class="normal-btn normal-btn-main btn-size-5"></input>
			  </div>
            </form>
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
    <script src="vendors/jquery-countdown/dist/jquery.countdown.js"></script>
    <script src="vendors/jquery-countdown/dist/jquery.final-countdown.js"></script>
    <script src="vendors/jquery-countdown/dist/kinetic.js"></script>
    <script src="assets/js/main.js"></script>
    <script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='../../www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
    <script>setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol + "//script.crazyegg.com/pages/scripts/0040/7412.js?" + Math.floor(new Date().getTime() / 3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script>
  </body>

</html>