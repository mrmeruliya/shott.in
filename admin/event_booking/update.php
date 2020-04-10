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
                                              $id = $_REQUEST['event_booking_id'];
                                              $query="SELECT * FROM event_booking where event_booking_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

                                       <form method="POST" action="update.php" enctype="multipart/form-data"   >                                         
                                            

											  <div class="form-group">
                                              
                                                <input type="hidden" name="event_booking_id" id="event_booking_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>
                                           
											  <div class="form-group">
                                                <label for="ff03">event booking date:</label>
                                                <input type="date" name="event_booking_date" 
                                                       class="form-control" id="ff03"  value="<?php echo $row['event_booking_date']; ?>"  required/>
                                                
                                            </div>
										       <div class="form-group">
                                                <label for="ff04"> no of person :</label>
                                                <input type="text" name="no_of_person" 
                                                       class="form-control" id="ff04" value="<?php echo $row['no_of_person']; ?>"  required/>
                                                
                                                </div>
												  <div class="form-group">
                                                <label for="ff04"> contact no:</label>
                                                <input type="text" name="contact_no" 
                                                       class="form-control" id="ff04" value="<?php echo $row['contact_no']; ?>"  required/>
                                                
                                                </div>
												<div class="customfield__select">
												  <label for="ff09">user name:</label>
                                                  <select name="user_name" class="form-control" id="ff003" value="<?php echo $row['first_name']; echo $row['last_name']; ?>"  required>    
                                            
											   <?php
                               $query="SELECT * FROM user_registration";
                               $result=mysqli_query($con,$query);
 	while($row=mysqli_fetch_array($result))
		{
		?>
		<option value=<?php echo htmlentities($row['user_id']); ?> > <?php  echo htmlentities($row['first_name']); ?><?php  echo htmlentities($row['last_name']); ?>
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
$id=$_REQUEST['event_booking_id'];
$event_booking_date=$_POST['event_booking_date'];
$date_time=$_POST['date_time'];
$query="update event_booking set event_booking_date='$event_booking_date',date_time='$date_time' where event_booking_id=$id";
          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
         else
		 {
		  header('location:event_booking_display.php');		
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