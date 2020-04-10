<?php
ob_start();
include "../include/header.php";
include "../include/menu.php";
include "../include/connection.php";
?>
<!-- @  .container -->      
                
        <div class="container cf--res">
         
<!-- @ ~~~~ .main  -->

            <div class="main" id="main" role="main">
                    
                <div class="inner">
                    
<!-- @ ~~~~~~~~~~~~ .alert -->
                    
                  
<!-- @ ~~~~~~~~~~~~ .row -->
                                
                    <div class="row">
                                    
                        <div class="col-lg-12">                    
                    
<!-- @ ~~~~~~~~~~~~~~~~~~~~ .panel -->
                            
                            <div class="panel mb-0" role="region" aria-label="panel title">
                                
                               
                                
                                <div class="row">
                                
                                    <div class="col-xl-12">
                                        
                                        <form method="POST" action="event_insertt.php" enctype="multipart/form-data">              
                                            
											  <div class="form-group">
                                                <label for="ff02">event title:</label>
                                                <input type="text" name="event_title"  placeholder="Type your event title" 
                                                       class="form-control" id="ff02"/>
                                                
                                            </div>
                                                 <div class="form-group">
                                                <label for="ff03">event text:</label>
                                                <input type="text" name="event_text"  placeholder="Type your event text" 
                                                       class="form-control" id="ff03"/>
                                          
												 <div class="form-group">
                                            </div>
										        <div class="form-group">
                                                <label for="ff04">event image :</label>
                                                <input type="file" name="event_image"  placeholder="add event image" 
                                                       class="form-control" id="ff04"/>
                                                
                                                </div>
												<br>
											  
                                                <label for="ff05">event time:</label>
                                                <input type="text" name="event_time"  placeholder="Type your event timing" 
                                                       class="form-control" id="ff05"/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff06">event pricing :</label>
                                                <input type="text" name="event_pricing"  placeholder="Type your event price" 
                                                       class="form-control" id="ff06"/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff07">event technology  :</label>
                                                <input type="text" name="event_technology"  placeholder="Type your event technology" 
                                                       class="form-control" id="ff07"/>
                                                
                                                </div>
												<div class="form-group">
                                                <label for="ff08">deals and packages :</label>
                                                <input type="text" name="event_deals_and_packages"  placeholder="Type deals and packages" 
                                                       class="form-control" id="ff08"/>
                                                </div>
												<div class="customfield__select">
												  <label for="ff09">shott city:</label>
                                                  <select name="shott_city_name" class="form-control" id="ff003">    
                                            
											   <?php
                               $query="SELECT * FROM shott_city";
                               $result=mysqli_query($con,$query);
 	while($row=mysqli_fetch_array($result))
		{
		?>
		<option value=<?php echo htmlentities($row['shott_city_id']); ?> > <?php  echo htmlentities($row['shott_city_name']); ?>
</option>
<?php }
?>
</select> 
</div>
                                       
                                            <a href="" class="btn btn-outline-default mt-6 mr-1">Reset form</a>
                                            <input type="submit" name="submit" class="btn btn-default mt-6">
                                            
                                        </form>
                                        
                                    </div><!-- // .col-xl-12 --> 
                                
                                </div><!-- // .row -->
                       
                            </div><!-- // .panel --> 
                            
                        </div><!-- // .col-lg-12 -->                             

                    </div><!-- // .row -->

                </div><!-- // .inner -->

            </div><!-- // .main -->
            
        </div><!-- // .container --> 
<?php
include "../include/footer.php";
?>