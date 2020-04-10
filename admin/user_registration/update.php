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
									
                                        <?php
                                              $id = $_REQUEST['user_id'];
                                              $query="SELECT * FROM user_registration where user_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

                                        
                                        <form method="POST" action="update.php" >                                         
                                            

											  <div class="form-group">
                                              
                                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>
                                           
											  <div class="form-group">
                                                <label for="ff03"> firstname :</label>
                                                <input type="text" name="first_name"  placeholder="Type your firstname" 
                                                       class="form-control" id="ff03"  value="<?php echo $row['first_name']; ?>"  required/>
                                                
                                            </div>
										        <div class="form-group">
                                                <label for="ff04">surname :</label>
                                                <input type="text" name="last_name"  placeholder=" Type your surname " 
                                                       class="form-control" id="ff04" value="<?php echo $row['last_name']; ?>"  required/>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff05">email id:</label>
                                                <input type="text" name="email_id"  placeholder="Type your email" 
                                                       class="form-control" id="ff05" value="<?php echo $row['email_id']; ?>"  required/>
                                                
                                                </div>
												
                                                </div>
												 <div class="form-group">
                                                <label for="ff07"> password  :</label>
                                                <input type="password" name="password"  placeholder="Type your new password" 
                                                       class="form-control" id="ff07" value="<?php echo $row['password']; ?>"  required/><br>
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff07"> mobile no  :</label>
                                                <input type="password" name="mobile_no"  placeholder="Type your new password" 
                                                       class="form-control" id="ff07" value="<?php echo $row['mobile_no']; ?>"  required/><br>
                                                
                                                </div>
												 <div class="form-group">
                                               <label for="ff08">date of birth  :</label>
                                                <input type="date" name="date_of_birth"  placeholder="select your birthdate" 
                                                       class="form-control" id="ff08" value="<?php echo $row['date_of_birth']; ?>"  required/>
                                                
                                                </div>
												<div class="customfield__select">
												  <label for="ff09">shott city:</label>
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
<div class="customfield__select">
												  <label for="ff09"> state :</label>
                                                  <select name="state" class="form-control" id="ff003">    
                                            
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
                                                  <select name="country" class="form-control" id="ff003">    
                                            
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
                                       
                                        

<?php
if(isset($_REQUEST["submit"]))
{
$id=$_REQUEST['user_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$date_of_birth=$_POST['date_of_birth'];
$shott_city_id=$_POST['shott_city_id'];
$state_id=$_POST['state_id'];
$country_id=$_POST['country_id'];


$query = "update user_registration set first_name='$first_name',last_name='$last_name',email_id='$email_id',password='$password',mobile_no='$mobile_no',date_of_birth='$date_of_birth',shott_city_id='$shott_city_id',state_id='$state_id',country_id='$counry_id'  where user_id=$id";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_registration.php');
		}

}
?>
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