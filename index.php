<!DOCTYPE html>
<html class="no-js">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shott.in | Home</title>
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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
 
  </head>
  <body class="corporate-page">
    
	
	
	
	
	
    <?php
	include "menu.php";
	?>
				<?php
				if(!isset($_REQUEST['scid']))
				{
				?>
 <div id="myModal" class="modal fade">
    <div class="modal-dialog" style="margin-top: 250px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Select Your City</h4>
            </div>
            <div class="modal-body">

                <form action="index.php" method="get">
                    <div class="form-group">
                        <select class="form-control" name="scid" id="scid">
						<?php
				$query_shott_city_b1="SELECT * FROM shott_city";
				$result_shott_city_b1=mysqli_query($con,$query_shott_city_b1);
				
				

				while($row_shott_city_b1=mysqli_fetch_array($result_shott_city_b1))
				{
				?>
						<option value="<?php echo $row_shott_city_b1['shott_city_id'];?>"><?php echo $row_shott_city_b1['shott_city_name'];?></option>
				
				<?php
				}
				?>
				
						</select>
						
						
                    </div>
                    
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
        </div>
    </div>
</div>
  <?php
  
  }
  ?>

   
      <!--site header-->
      <header class="site-header home-sticky-nav-trigger">
        <div class="home-fw-slider style-3 caption-slider dir-nav parents-height">
          
		<?php
		$query_slider="SELECT * FROM slider";
		$result_slider=mysqli_query($con,$query_slider);
		
		$id_slider=1;

		while($row_slider=mysqli_fetch_array($result_slider))
		{
		?>
		
		  <div class="home-slider-item">
            <div style="background-image: url(admin/slider/<?php echo $row_slider['slider_images'];?>);" class="item-image">
              <div class="overlay">
                <div class="cell-vertical-wrapper">
                  <div class="cell-middle">
                    <div class="container">
                      <div class="caption-wrapper text-center">
                        
                        <h1 class="caption"><?php echo $row_slider['slider_title'];?></h1>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		<?php
		}
		?>	

		
        </div>
      </header>
      <!--end site header-->
	  
	  
	  
      
      <section class="bgc-light">
        <div class="service-section-03">
          <div class="container">
            <div class="row">
              <div class="col-md-4 service-item-wrapper text-center section-block">
                <div class="block-service-style-03">
				
                    <h5 class="heading-hr-2">GO SHOTT</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p></a></div>
              </div>
              <div class="col-md-4 service-item-wrapper text-center section-block">
                <div class="block-service-style-03">
				
                    <h5 class="heading-hr-2">HUNGRY ?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p></a></div>
              </div>
              <div class="col-md-4 service-item-wrapper text-center section-block">
                <div class="block-service-style-03">
                    <h5 class="heading-hr-2">PARTY WITH US</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
	  
	  
	  
      <section class="large-space">
        <div data-stellar-background-ratio="0.25" style="background-image: url('assets/images/quote-bg.jpg');" class="parallax-bg quote-slider-parallax"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12 remove-col-padding-2 section-block">
              <div class="quote-slider-02 simple-slider dir-nav color-light">
                <div class="quote-item clearfix">
                  <div class="item-icon"><i class="icon-quote"></i></div>
                  <div class="item-content">
                    <p class="comment">&quot; Today I choose life. Every morning when I wake up I can choose joy, happiness, negativity, pain... To feel the freedom that comes from being able to continue to make mistakes and choices - today I choose to feel life, not to deny my humanity but embrace it.&quot;</p>
                    <div class="name text-right">
                      <p>PG Sarkheliya</p>
                    </div>
                  </div>
                </div>
                <div class="quote-item clearfix">
                  <div class="item-icon"><i class="icon-quote"></i></div>
                  <div class="item-content">
                    <p class="comment">&quot; Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.&quot;</p>
                    <div class="name text-right">
                      <p>Neil Meruliya</p>
                    </div>
                  </div>
                </div>
                <div class="quote-item clearfix">
                  <div class="item-icon"><i class="icon-quote"></i></div>
                  <div class="item-content">
                    <p class="comment">&quot; Success or failure depends more upon attitude than upon capacity successful men act as though they have accomplished or are enjoying something. Soon it becomes a reality. Act, look, feel successful, conduct yourself accordingly, and you will be amazed at the positive results.&quot;</p>
                    <div class="name text-right">
                      <p>Bansi Meruliya</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     
	  
	  
	  <section class="large-space">
        <header class="section-header header-type-2 style-2">
          <div class="container">
            <div class="row">
			
			 <div class="col-md-4 col-xs-12">
			 </div>
              <div class="col-md-4 col-xs-12">
                <h1 style=" text-align:center;">OUR ACTIVITY</h1>
              </div>
               <div class="col-md-4 col-xs-12">
			 </div>
            </div>
          </div>
        </header>
        <div class="team-section-01">
          <div class="container">
            <div class="row">
			
			<?php
		$query_activity="SELECT * FROM activity where shott_city_id = $scid LIMIT 3";
		$result_activity=mysqli_query($con,$query_activity);
		
		$id_activity=1;

		while($row_activity=mysqli_fetch_array($result_activity))
		{
			
			$position=135; // Define how many character you want to display.
			$activity_description = substr($row_activity['activity_text'], 0, $position); 	
		?>
			
              <div class="col-md-4">
                <div class="team-style-01 text-center section-block-p">
                  <a href="activity_details.php?aid=<?php echo $row_activity['activity_id'];?>&scid=<?php echo $scid;?>">
				  <div class="image"><img src="admin/activity/<?php echo $row_activity['activity_img'];?>" alt="">
                    
                  </div>
				  </a>
                  <a href="activity_details.php?aid=<?php echo $row_activity['activity_id'];?>&scid=<?php echo $scid;?>">
				  <h5 class="name"><?php echo $row_activity['activity_title'];?></h5>
				  </a>
                  <p class="job" style="padding-top: 20px;"><?php echo $activity_description;?></p>
                </div>
              </div>
			  
			  <?php
			  
			  }
			  ?>
			  
			   
              
              
            </div>
          </div>
        </div>
      </section>
	  
	   <section class="large-space">
        <header class="section-header header-type-2 style-2">
          <div class="container">
            <div class="row">
			
			 <div class="col-md-4 col-xs-12">
			 </div>
              <div class="col-md-4 col-xs-12">
                <h1 style=" text-align:center;">PARTY WITH SHOTT</h1>
              </div>
               <div class="col-md-4 col-xs-12">
			 </div>
            </div>
          </div>
        </header>
        <div class="team-section-01">
          <div class="container">
            <div class="row">
              
				<?php
				$query_event="SELECT * FROM event where shott_city_id = $scid LIMIT 3";
				$result_event=mysqli_query($con,$query_event);
				
				$id_event=1;

				while($row_event=mysqli_fetch_array($result_event))
				{
					
					$position=135; // Define how many character you want to display.
					$event_description = substr($row_event['event_text'], 0, $position); 	
				?>
			  
			  <div class="col-md-4">
                <div class="team-style-01 text-center section-block-p">
                  <a href="event_details.php?eid=<?php echo $row_event['event_id'];?>&scid=<?php echo $scid;?>">
				  <div class="image"><img src="admin/event/<?php echo $row_event['event_img'];?>" alt="">
                    
                  </div>
				  </a>
                  <a href="event_details.php?eid=<?php echo $row_event['event_id'];?>&scid=<?php echo $scid;?>">
				  <h5 class="name"><?php echo $row_event['event_title'];?></h5>
				  </a>
                 <p class="job" style="padding-top: 20px;"><?php echo $event_description;?></p>
                </div>
              </div>
			 
				<?php
				}
				?>
			 
			 
              
              
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
    <script type="text/javascript" src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/isotope/packery-mode.pkgd.min.js"></script>
    <script type="text/javascript" src="vendors/img-loaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='../../www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
    <script>setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol + "//script.crazyegg.com/pages/scripts/0040/7412.js?" + Math.floor(new Date().getTime() / 3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script>
  </body>

</html>