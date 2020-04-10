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
                                        
                                        <form method="POST" action="registration_insert.php" >                                         
                                            

                                           
											  <div class="form-group">
                                                <label for="ff03"> firstname :</label>
                                                <input type="text" name="first_name"  placeholder="Type your firstname" 
                                                       class="form-control" id="ff03"/>
                                                
                                            </div>
										        <div class="form-group">
                                                <label for="ff04">lastname :</label>
                                                <input type="text" name="last_name"  placeholder=" Type your surname " 
                                                       class="form-control" id="ff04"/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff04"> user type :</label>
                                                <input type="radio" name="user_type"  
                                                        id="ff04" value="user"> user
                                                 <input type="radio" name="user_type"
                                                        id="ff05" value="admin"> admin
                                                </div>
												 <div class="form-group">
                                                <label for="ff05">email:</label>
                                                <input type="text" name="email_id"  placeholder="Type your email" 
                                                       class="form-control" id="ff05"/>
                                                
                                                </div>
												
                                                </div>
												 <div class="form-group">
                                                <label for="ff07"> password  :</label>
                                                <input type="password" name="password"  placeholder="Type your new password" 
                                                       class="form-control" id="ff07"/><br>
                                                
                                                </div>
												 <div class="form-group">
                                               <label for="ff08"> mobile no :</label>
                                                <input type="text" name="mobile_no"  placeholder="select your mobile no" 
                                                       class="form-control" id="ff08"/>
                                                
                                                </div>
												 <div class="form-group">
                                               <label for="ff08">date of birth  :</label>
                                                <input type="date" name="date_of_birth"  placeholder="select your birthdate" 
                                                       class="form-control" id="ff08"/>
                                                
                                                </div>
												<div class="customfield__select">
												  <label for="ff09">shott city:</label>
                                                  <select name="shott_cn" class="form-control" id="ff003">    
                                            
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
<div class="customfield__select">
												  <label for="ff09"> state :</label>
                                                  <select name="state_s" class="form-control" id="ff003">    
                                            
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
<div class="customfield__select">
												  <label for="ff09"> country :</label>
                                                  <select name="country_c" class="form-control" id="ff003">    
                                            
											   <?php
                               $query="SELECT * FROM country";
                               $result=mysqli_query($con,$query);
 	while($row=mysqli_fetch_array($result))
		{
		?>
		<option value=<?php echo htmlentities($row['country_id']); ?> > <?php  echo htmlentities($row['country_name']); ?>
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