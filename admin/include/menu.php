</head>
    <body class="stickyheader"> 
  
        
<!-- @  .expandedmenu --> 
        
        <div class="expandedmenu">
            
            <div class="expandedmenu__backdrop"></div>
                
            <div class="inner">
                
<!-- @ ~~~~~~~~ .expandedmenu__profile -->
                
                <div class="expandedmenu__profile">
                    
                    <a href="javascript:void(0);" class="arrow" data-trigger="expmenuclose">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>                                        

                    <div class="profile__name">                        
                        <a href="#">Shott</a>                                                
                    </div>
                    
                </div>                
                
<!-- @ ~~~~~~~~ .expandedmenu__block --> 
                
                <div class="expandedmenu__block">                    
                    
                    
                    <div class="block__item">                        
                        <a href="../activity/view_activity.php">Activity</a>                        
                    </div>
                    <div class="block__item">                        
                        <a href="../activity/view_activity.php">Event</a>                        
                    </div>
                   
                    
                </div>
            
            </div><!-- // .inner -->
            
        </div><!-- // .expandedmenu -->
  
<!-- @  #mainheader -->

        <header id="mainheader">

<!-- @ ~~~~ #pageloadingbar --> 

            <div id="pageloadingbar"></div>              

<!-- @ ~~~~ .mainheader__top -->

            <div class="mainheader__top" role="banner">

<!-- @ ~~~~~~~ .inner -->

                <div class="container inner">

                    <div class="float-left">                            

<!-- @ ~~~~~~~~~~~~~~~~ .hamburger -->

                        <a href="#" class="hamburger d-lg-none" data-trigger="expmenuopen">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a> 

<!-- @ ~~~~~~~~~~~~~~~~ .dropdown --> 

                        <div class="dropdown d-none d-lg-block">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownmenu1" 
                               aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownmenu1">
                                <div class="ext-dropdown--row">
                                    <div>
                                        <a class="dropdown-item" href="../activity/view_activity.php">Activity</a>         
                                        
                                        <a class="dropdown-item" href="../event/view_event.php">Event</a> 
                                        
                                        <a class="dropdown-item" href="../food_category/view_category.php">Food Category</a>                                            
                                        <a class="dropdown-item" href="../food_sub_category/view_food_sub_category.php">Food Sub Category</a>                                            
                                        <a class="dropdown-item" href="../food_item/view_food_item.php">Food Item</a>       
										
                                        
                                    </div>
                                    <div>  
                                        <a class="dropdown-item" href="../event_booking/view_event_booking.php">Event Booking</a>
                                        <a class="dropdown-item" href="../user_registration/view_registration.php">User</a>
                                                   
                                    </div>
                                    <div>             
                                        <a class="dropdown-item" href="../slider/view_slider.php">Slider</a>
                                        <a class="dropdown-item" href="../shott_city/view_shott_city.php">Shott City</a>
                                        <a class="dropdown-item" href="../country/view_country.php">Country</a>
                                        <a class="dropdown-item" href="../state/view_state.php">State</a>
                                        <a class="dropdown-item" href="../city/view_city.php">City</a>
                                        
                                    </div>
                                </div>                                    
                            </div>

                        </div>                            

                    </div><!-- // .float-left -->                       

                    <a href="../index.php" class="logo centerd">Shott.in | Admin Panel</a>  

                    <div class="float-right">

<!-- @ ~~~~~~~~~~~~~~~~ .dropdown -->                            

                        <div class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class='fa fa-user'></i>
							   <?php
							   session_start();
				if(isset($_SESSION['admin_user_name']))
				{
				echo $_SESSION['admin_user_name'];
				}
				?>
			   
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a class="dropdown-item" href="../logout.php">Logout</a>
                            </div>

                        </div>
                        
                    </div><!-- // .float-right -->

                </div><!-- // .inner -->

            </div><!-- // .mainheader__top -->

        </header><!-- // #mainheader -->
        