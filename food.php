<!DOCTYPE html>
<html class="no-js">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shott.in | Food</title>
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
      <header class="site-header common-static-header">
        <div data-stellar-background-ratio="0.25" style="background-image: url('assets/images/header-parallax.jpg');" class="parallax-bg"></div>
        <div class="container">
          <h1>HUNGRY ?</h1>
        </div>
      </header>
      <!--end site header-->
      <section class="no-padding-bottom">
        <div class="container">
          <div class="row">
            <aside class="col-md-3 hidden-sm hidden-xs">
              
              <div class="widget widget-blog-categories">
                <h5>FOOD CATEGORIES</h5>
                <ul class="blog-categories">
                  <?php
				  
				  $cid = $_REQUEST['cid']; 
				  
				$query_category1="SELECT * FROM food_category";
				$result_category1=mysqli_query($con,$query_category1);
				
				

				while($row_category1=mysqli_fetch_array($result_category1))
				{
				?>
				  <li><a href="food.php?scid=<?php echo $scid;?>&cid=<?php echo $row_category1['category_id'];?>"><?php echo $row_category1['category_title'];?></a></li>
                  <?php
				  }
				  ?>
                </ul>
              </div>
             
             
              
              
            </aside>
            <div class="col-md-9 col-xs-12">
             
              <div class="accordion-1 style-2">
                <div id="accordion-service-2" class="panel-group">
                  
				<?php
				$query_sub_category1="SELECT * FROM food_sub_category where category_id = $cid";
				$result_sub_category1=mysqli_query($con,$query_sub_category1);
				
				$i_sub = 0;
				$i_sub_title = 1;

				while($row_sub_category1=mysqli_fetch_array($result_sub_category1))
				{
				$sub_c_id = $row_sub_category1['sub_category_id'];
				?>
				  
				  <div class="panel">
                    <div class="panel-heading">
					<a data-toggle="collapse" data-parent="#accordion-service-<?php echo $i_sub_title;?>" href="#service-item-2-<?php echo $i_sub;?>" class="panel-title">
                        <h5><?php echo $row_sub_category1['sub_category_title'];?></h5>
						</a>
						</div>
                    <div id="service-item-2-<?php echo $i_sub;?>" class="panel-collapse collapse in">
                      <div class="panel-body">
					<?php
					$query_sub_category2="SELECT * FROM food_item where sub_category_id = $sub_c_id";
					$result_sub_category2=mysqli_query($con,$query_sub_category2);
					
					
					while($row_sub_category2=mysqli_fetch_array($result_sub_category2))
					{
					?>
					<div class="row" style="    font-size: 15px;border-radius: 20px;border-color: #9c5b57;border-bottom-style: groove;padding-bottom: 15px;padding-top: 15px;">
					
					<div class="col-md-8 col-xs-12">
					<?php echo $row_sub_category2['food_item_title'];?>
					</div>
					
					<div class="col-md-4 col-xs-12">
					Rs. <?php echo $row_sub_category2['food_item_pricing'];?>
					</div>	
					
					</div>					
					 <?php
					 }
					 ?>
					 </div>
                    </div>
                  </div>
				  
				 <?php
				 $i_sub++;
				 $i_sub_title++;
				 }
				 ?> 
				  
                  
                  
				 
				 
				  
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
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/isotope/packery-mode.pkgd.min.js"></script>
    <script type="text/javascript" src="vendors/img-loaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='../../www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
    <script>setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol + "//script.crazyegg.com/pages/scripts/0040/7412.js?" + Math.floor(new Date().getTime() / 3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script>
  </body>

</html>