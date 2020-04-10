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
                                              $id = $_REQUEST['event_id'];
                                              $query="SELECT * FROM event where event_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

                                       <form method="POST" action="update.php" enctype="multipart/form-data"   >                                         
                                            

											  <div class="form-group">
                                              
                                                <input type="hidden" name="event_id" id="event_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="ff04">event title:</label>
                                                <input type="text" name="event_title"  
                                                       class="form-control" id="ff04" value="<?php echo $row['event_title']; ?>"  />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff04">event image :</label>
                                                <input type="file" name="event_image" 
                                                       class="form-control" id="ff04" value="<?php echo $row['event_img']; ?>"  />
                                                
                                                </div>
											  <div class="form-group">
                                                <label for="ff03">event text:</label>
                                                <input type="text" name="event_text"  
                                                       class="form-control" id="ff03" value="<?php echo $row['event_text']; ?>"  required />
                                                
                                            </div>
											
										       
												 <div class="form-group">
                                                <label for="ff05">event time:</label>
                                                <input type="text" name="event_time"
                                                       class="form-control" id="ff05" value="<?php echo $row['event_time']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff06">event pricing :</label>
                                                <input type="text" name="event_pricing" 
                                                       class="form-control" id="ff06" value="<?php echo $row['event_pricing']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff07">event technology  :</label>
                                                <input type="text" name="event_technology"  
                                                       class="form-control" id="ff07" value="<?php echo $row['event_technology']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff08">deals and packages :</label>
                                                <input type="text" name="event_deals_and_packages"  
                                                       class="form-control" id="ff08" value="<?php echo $row['event_deals_and_packages']; ?>" />
                                                
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
                                      
                                        



<?php
if(isset($_REQUEST["submit"]))
{
//$id=$_REQUEST['activity_id'];
if(isset($_FILES['event_image']['name']) && ($_FILES['event_image']['name']==""))
{
//no file upload
$id=$_REQUEST['event_id'];
$event_title=$_POST['event_title'];
$event_text=$_POST['event_text'];
$event_time=$_POST['event_time'];
$event_pricing =$_POST['event_pricing'];
$event_technology=$_POST['event_technology'];
$event_deals_and_packages=$_POST['event_deals_and_packages'];
$query="update event set event_title='$event_title',event_text='$event_text',event_time='$event_time',event_pricing='$event_pricing',event_technology='$event_technology',event_deals_and_packages='$event_deals_and_packages' where event_id=$id";

          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
         else
		 {
		  header('location:view_event.php');		
	     }
}
else{

//$id=$_REQUEST['activity_id'];
$event_title=$_POST['event_title'];
$event_text=$_POST['event_text'];
$event_time=$_POST['event_time'];
$event_pricing =$_POST['event_pricing'];
$event_technology=$_POST['event_technology'];
$event_deals_and_packages=$_POST['event_deals_and_packages'];
$query="update event set event_title='$event_title',event_text='$event_text',event_time='$event_time',event_pricing='$event_pricing',event_technology='$event_technology',event_deals_and_packages='$event_deals_and_packages' where event_id=$id";

          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
		  else{
       
if(isset($_FILES['event_image']['name']) && ($_FILES['event_image']['name']!=""))
    {  
	$query12="SELECT * FROM event where event_id=$id";
		$result12=mysqli_query($con,$query12);
		$row12=mysqli_fetch_array($result12);        
		unlink($row12['event_img']);
        $id=$_REQUEST['event_id'];
		$filename = $_FILES['event_image']['name'];
	    $temp = $_FILES['event_image']["tmp_name"];
	  
		move_uploaded_file($temp,"picture/".$id.$filename);
		$sql1="update event set event_img='picture/".$id.$filename."' where event_id=$id";
		
		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_event.php');		
	    }
    }
}
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