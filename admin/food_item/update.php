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
                                              $id = $_REQUEST['food_item_id'];
                                              $query="SELECT * FROM food_item where food_item_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>
                                            <form method="POST" action="update.php" >                                         
                                            
											  <div class="form-group">
                                              
                                                <input type="hidden" name="food_item_id" id="food_item_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="ff02"> food item title:</label>
                                                <input type="text" name="food_item_title" 
                                                       class="form-control" id="ff02"  value="<?php echo $row['food_item_title']; ?>"  required/>
                                                
                                            </div>
											 <div class="form-group">
                                                <label for="ff02"> food item pricing :</label>
                                                <input type="text" name="food_item_pricing"  
                                                       class="form-control" id="ff02"  value="<?php echo $row['food_item_pricing']; ?>"  required/>
                                                
                                            </div>
											 <div class="form-group">
                                                <label for="ff003">sub category title:</label>
                                                <div class="customfield__select">
                                                    <select name="sub_category_title" value="<?php echo $row['sub_category_title']; ?>"  class="form-control" id="ff003">       
                                            
											   <?php
                               $query="SELECT * FROM food_sub_category";
                               $result=mysqli_query($con,$query);
 	while($row=mysqli_fetch_array($result))
		{
		?>
		<option value=<?php echo htmlentities($row['sub_category_id']); ?> > <?php  echo htmlentities($row['sub_category_title']); ?>
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
$id=$_REQUEST['food_item_id'];
$name=$_POST['food_item_title'];
$rate=$_POST['food_item_pricing'];
$c_name=$_POST['sub_category_title'];

$query = "update food_item set food_item_title='$name',food_item_pricing='$rate',sub_category_id='$c_name' where food_item_id=$id";
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_food_item.php');
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