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
                                        
                                        <form method="POST" action="city_insert.php" >                                         
                                            

                                            <div class="form-group">
                                                <label for="ff02">city name:</label>
                                                <input type="text" name="city_name"  placeholder="Type your sub category name" 
                                                       class="form-control" id="ff02"/>
                                                
                                            </div>
											 <div class="form-group">
                                                <label for="ff003">state name:</label>
                                                <div class="customfield__select">
                                                    <select name="state_name" class="form-control" id="ff003">       
                                            
											   <?php
                               $query="SELECT * FROM state";
                               $result=mysqli_query($con,$query);
 	while($row=mysqli_fetch_array($result))
		{
		?>
		<option value=<?php echo htmlentities($row['state_id']); ?> > <?php  echo htmlentities($row['state_name']); ?>
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