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
                                              $id = $_REQUEST['activity_id'];
                                              $con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysqli_error());
                                              $query="SELECT * FROM activity where activity_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

                                       <form method="POST" action="update.php" enctype="multipart/form-data"   >                                         
                                            

											  <div class="form-group">
                                              
                                                <input type="hidden" name="activity_id" id="activity_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="ff04">activity title:</label>
                                                <input type="text" name="activity_title"  
                                                       class="form-control" id="ff04" value="<?php echo $row['activity_title']; ?>"  />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff04">activity image :</label>
                                                <input type="file" name="activity_image" 
                                                       class="form-control" id="ff04" value="<?php echo $row['activity_img']; ?>"  />
                                                
                                                </div>
											  <div class="form-group">
                                                <label for="ff03">activity text:</label>
                                                <input type="text" name="activity_text"  
                                                       class="form-control" id="ff03" value="<?php echo $row['activity_text']; ?>"  required />
                                                
                                            </div>
											
										       
												 <div class="form-group">
                                                <label for="ff05">activity time:</label>
                                                <input type="text" name="activity_time"
                                                       class="form-control" id="ff05" value="<?php echo $row['activity_time']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff06">activity pricing :</label>
                                                <input type="text" name="activity_pricing" 
                                                       class="form-control" id="ff06" value="<?php echo $row['activity_pricing']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff07">activity technology  :</label>
                                                <input type="text" name="activity_technology"  
                                                       class="form-control" id="ff07" value="<?php echo $row['activity_technology']; ?>"  required />
                                                
                                                </div>
												 <div class="form-group">
                                                <label for="ff08">deals and packages :</label>
                                                <input type="text" name="activity_deals_and_packages"  
                                                       class="form-control" id="ff08" value="<?php echo $row['activity_deals_and_packages']; ?>" />
                                                
                                                </div>
												 <div class="customfield__select">
												  <label for="ff09">shott city    :</label>
                                                    <select name="shott_city" class="form-control" id="ff003">    
                                            
											   <?php
                               $con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysql_error());
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
if(isset($_FILES['activity_image']['name']) && ($_FILES['activity_image']['name']==""))
{
//no file upload
$id=$_REQUEST['activity_id'];
$activity_title=$_POST['activity_title'];
$activity_text=$_POST['activity_text'];
$activity_time=$_POST['activity_time'];
$activity_pricing =$_POST['activity_pricing'];
$activity_technology=$_POST['activity_technology'];
$activity_deals_and_packages=$_POST['activity_deals_and_packages'];
$shott_city=$_POST['shott_city'];
$con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysqli_error());
$query="update  activity set activity_title='$activity_title',activity_text='$activity_text',activity_time='$activity_time',activity_pricing='$activity_pricing',activity_technology='$activity_technology',activity_deals_and_packages='$activity_deals_and_packages',shott_city_id='$shott_city' where activity_id=$id";

          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
         else
		 {
		  header('location:view_activity.php');		
	     }
}
else{

//$id=$_REQUEST['activity_id'];
$activity_title=$_POST['activity_title'];
$activity_text=$_POST['activity_text'];
$activity_time=$_POST['activity_time'];
$activity_pricing =$_POST['activity_pricing'];
$activity_technology=$_POST['activity_technology'];
$activity_deals_and_packages=$_POST['activity_deals_and_packages'];
$shott_city=$_POST['shott_city'];
$con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysqli_error());
$query="update  activity set activity_title='$activity_title',activity_text='$activity_text',activity_time='$activity_time',activity_pricing='$activity_pricing',activity_technology='$activity_technology',activity_deals_and_packages='$activity_deals_and_packages',shott_city_id='$shott_city' where activity_id=$id";


          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
		  else{
       
if(isset($_FILES['activity_image']['name']) && ($_FILES['activity_image']['name']!=""))
    {  
	$query12="SELECT * FROM activity where activity_id=$id";
		$result12=mysqli_query($con,$query12);
		$row12=mysqli_fetch_array($result12);        
		unlink($row12['activity_img']);
        $id=$_REQUEST['activity_id'];
		$filename = $_FILES['activity_image']['name'];
	    $temp = $_FILES['activity_image']["tmp_name"];
	  
		move_uploaded_file($temp,"picture/".$id.$filename);
		$sql1="update activity set activity_img='picture/".$id.$filename."' where activity_id=$id";
		
		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_activity.php');		
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