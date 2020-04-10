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
                                        
                                        <form method="POST" action="activity_insert.php" enctype="multipart/form-data"   >              
                                            
											  <div class="form-group">
                                                <label for="ff02">activity title:</label>
                                                <input type="text" name="activity_title"  placeholder="Type your activity title" 
                                                       class="form-control" id="ff02"/>
                                                
                                            </div>
                                                 <div class="form-group">
                                                <label for="ff03">activity text:</label>
                                                <input type="text" name="activity_text"  placeholder="Type your activity text" 
                                                       class="form-control" id="ff03"/>
                                          
												 <div class="form-group">
                                            </div>
										        <div class="form-group">
                                                <label for="ff04">activity image :</label>
                                                <input type="file" name="activity_image"  placeholder="add activity image" 
                                                       class="form-control" id="ff04"/>
                                                
                                                </div>
												<br>
											  
                                                <label for="ff05">activity time:</label>
                                                <input type="text" name="activity_time"  placeholder="Type your activity timing" 
                                                       class="form-control" id="ff05"/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff06">activity pricing :</label>
                                                <input type="text" name="activity_pricing"  placeholder="Type your activity price" 
                                                       class="form-control" id="ff06"/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff07">activity technology  :</label>
                                                <input type="text" name="activity_technology"  placeholder="Type your activity technology" 
                                                       class="form-control" id="ff07"/>
                                                
                                                </div>
												<div class="form-group">
                                                <label for="ff08">deals and packages :</label>
                                                <input type="text" name="activity_deals_and_packages"  placeholder="Type deals and packages" 
                                                       class="form-control" id="ff08"/>
                                                </div>
												 <div class="customfield__select">
												  <label for="ff09">shott city    :</label>
                                                    <select name="shott_city" class="form-control" id="ff003">    
                                            
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