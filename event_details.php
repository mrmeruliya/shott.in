<!DOCTYPE html>
<html class="no-js">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shott.in | Event</title>
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
   <?php
				if(isset($_REQUEST['eid']))
				{
					$eid = $_REQUEST['eid'];
				}
				?>
				<?php
				$query_event="SELECT * FROM event where event_id = $eid";
				$result_event=mysqli_query($con,$query_event);
				
				$row_event=mysqli_fetch_array($result_event);
					
				?>
		
      <!--site header-->
      <header class="site-header home-sticky-nav-trigger"></header>
      <header class="site-header portfolio-page-header">
        <div data-stellar-background-ratio="0.25" style="background-image: url('assets/images/home-box-3d.png');" class="parallax-bg"></div>
        <div class="container">
          <h1><?php echo $row_event['event_title'];?></h1>
        </div>
      </header>
	  
	  
				<?php
				if(isset($_REQUEST['q1']))
				{

				?>

				<section>
				<div class="container">
				<div class="row">

				<div class="col-xs-12">

				<div class="messagefull warning">
				<div class="content">
				<h5>UNSUCCESSFUL MESSAGE!  </h5>
				<p>Your date is already booked. please change your date and try again. </p>
				</div>
				</div>
				<div class="section-block"></div>

				</div>
				</div>
				</div>
				</section>
				<?php

				}
				?>

			  
				<?php
				if(isset($_REQUEST['q2']))
				{
				
				?>

				<section>
				<div class="container">
				<div class="row">


				<div class="col-xs-12">



				<div class="messagefull success">
				<div class="content">
				<h5>SUCCESSFULLY BOOKED. </h5>
				<p>Your event is successfully booked. click here to view your booking details. 
				<a style=" position: static;" href="my_booking.php?scid<?php echo $scid?>"> <button type="submit" class="normal-btn normal-btn-main btn-size-5">My Booking</button></a>
				</p>
				</div>
				</div>

				<div class="section-block"></div>



				</div>
				</div>
				</div>
				</section>
				<?php
				}
				?>

      <!--end site header-->
      <section>
        <header class="section-header header-type-2 style-1">
           <div class="container">
            <h4 class="heading-hr-1"><?php echo $row_event['event_title'];?></h4>
           <p class="job" style="text-align: -webkit-left;"><?php echo $row_event['event_text'];?></p>
          </div>
        </header>
        
      </section>
       <section style="padding-top: 0px;">
        <div class="container">
          <div class="home-boxed-slider style-4 caption-slider dir-nav">
            
			
			<?php
				$query_activity_img="SELECT * FROM event_images where event_id = $eid";
				$result_activity_img=mysqli_query($con,$query_activity_img);
				
				

				while($row_activity_img=mysqli_fetch_array($result_activity_img))
				{
					
					
				?>
			
			<div class="home-slider-item">
              <div class="item-image"><img src="admin/event/<?php echo $row_activity_img['event_images_url'];?>" alt="Home slider image" class="img-responsive">
               
              </div>
            </div>
			<?php
			}
			?>
            
          </div>
        </div>
      </section>
	  
	  
      <section style="padding-top: 20px">
        <div class="container">
          <div class="row">
            
            <div class="col-sm-12 col-xs-12 product-detail-1">
              <h3>Pricing</h3>
              <h1 class="color-main"><?php echo $row_event['event_pricing'];?></h1>
              <h3>Timing</h3>
              <h1 class="color-main"><?php echo $row_event['event_time'];?></h1>
              <div class="accordion-3 style-2">
                <div id="accordion-4" class="panel-group">
                  <div class="panel">
                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-4" href="#description10" class="panel-title">
                        <h5>Technology</h5></a></div>
                    <div id="description10" class="panel-collapse collapse in">
                      <div class="panel-body"><?php echo $row_event['event_technology'];?></div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-4" href="#description11" class="collapsed panel-title">
                        <h5>Deal & Packages</h5></a></div>
                    <div id="description11" class="panel-collapse collapse">
                      <div class="panel-body"><?php echo $row_event['event_deals_and_packages'];?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      
      <section>
        <div class="container">
          <div class="row">
            <div class="page-contact">
              <div class="col-md-3 section-block">
			  </div>
              <div class="col-md-6 section-block">
               
                <h3>Book Your Event Here...</h3>
                <div class="widget contact-us">
                  <form action="event_booking_code.php" method="post">
				  <p>Book Date:</p>
                    <input type="date" name="book_date" placeholder="date" required class="name">
				  <p>Number of Guests(Group must be 10+):</p>
                    <input type="text" name="no_of_person" placeholder="No of Person" required class="name">
					 <p>Email</p>
                    <input type="email" name="email" placeholder="Email" required class="email">
					
					<p>Contact No</p>
                    <input type="text" name="contact" placeholder="Contact No" required class="email">
					
                    <p>Preferred Method of Contact</p>
				  <select name="method" style="margin-bottom: 40px;width: 100%;border: 1px solid #dddddd;-webkit-box-sizing: border-box;box-sizing: border-box;font-size: 12px;line-height: 16px;outline: none;padding: 13px;-webkit-transition: all 0.4s ease-in-out;transition: all 0.4s ease-in-out;font-family: 'Raleway', sans-serif;" required>
				  <option selected="selected" value="0" disabled="disabled">Select</option>
				  <option value="phone" >phone</option>
				  <option value="email" >Email</option>
				  </select>
				  
				  <input type="hidden" name="event_id" value="<?php echo $row_event['event_id'];?>">
				  <input type="hidden" name="scid" value="<?php echo $scid;?>">
                    <button type="submit" class="normal-btn normal-btn-main btn-size-5">SUBMIT</button>
                  </form>
                </div>
              </div>
              
            </div>
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
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendors/slick/slick.js"></script>
    <script src="vendors/countto/jquery.countTo.js"></script>
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendors/progressbar/dist/progressbar.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='../../www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
    <script>setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol + "//script.crazyegg.com/pages/scripts/0040/7412.js?" + Math.floor(new Date().getTime() / 3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script>
  </body>

</html>