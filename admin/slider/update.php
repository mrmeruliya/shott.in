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
                                              $id = $_REQUEST['slider_id'];
                                              $query="SELECT * FROM slider where slider_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

                                       <form method="POST" action="update.php" enctype="multipart/form-data"   >                                         
                                            

											  <div class="form-group">
                                              
                                                <input type="hidden" name="slider_id" id="slider_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>
                                           <div class="form-group">
                                                <label for="ff03">slider images :</label>
                                                <input type="file" name="slider_images" 
                                                       class="form-control" id="ff03" value="<?php echo $row['slider_images']; ?>"/>
                                                
                                            </div>
											  <div class="form-group">
                                                <label for="ff03">slider title:</label>
                                                <input type="text" name="slider_title" 
                                                       class="form-control" id="ff03" value="<?php echo $row['slider_title']; ?>" />
                                                
                                            </div>
											 
                                                 
                                            </div>
                                            <a href="" class="btn btn-outline-default mt-6 mr-1">Reset form</a>
                                            <input type="submit" name="submit" class="btn btn-default mt-6">
                                            
                                        </form>
                                      
                                        



<?php
if(isset($_REQUEST["submit"]))
{
if(isset($_FILES['slider_images']['name']) && ($_FILES['slider_images']['name']==""))
{
//no file upload
$id=$_REQUEST['slider_id'];
$slider_title=$_POST['slider_title'];
$query="update slider set slider_title='$slider_title' where slider_id=$id";
          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
         else
		 {
		  header('location:view_slider.php');		
	     }
}
else{

$id=$_REQUEST['slider_id'];
$slider_title=$_POST['slider_title'];
$query="update slider set slider_title='$slider_title' where slider_id=$id";
          $result=mysqli_query($con,$query);
          if(!$result)
          {
          echo mysqli_error($con);
          }
		  else{
if(isset($_FILES['slider_images']['name']) && ($_FILES['slider_images']['name']!=""))
    {  
	$query12="SELECT * FROM slider_images where slider_id=$id";
		$result12=mysqli_query($con,$query12);
	$row12=mysqli_fetch_array($result12);        
		unlink($row12['slider_images']);
       
		$filename = $_FILES['slider_images']['name'];
	    $temp = $_FILES['slider_images']["tmp_name"];
	  
		move_uploaded_file($temp,"picture/".$id.$filename);
		$sql1="update slider set slider_images='picture/".$id.$filename."' where slider_id=$id";
		
		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_slider.php');		
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