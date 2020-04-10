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
                                              $id = $_REQUEST['category_id'];
                                              $query="SELECT * FROM food_category where category_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>
                                            <form method="POST" action="update.php" >                                         
                                            
											  <div class="form-group">
                                              
                                                <input type="hidden" name="category_id" id="category_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="ff02">category title:</label>
                                                <input type="text" name="category_title"  placeholder="Type your food category name" 
                                                       class="form-control" id="ff02"  value="<?php echo $row['category_title']; ?>"  required/>
                                                
                                            </div>
                                            <a href="" class="btn btn-outline-default mt-6 mr-1">Reset form</a>
                                            <input type="submit" name="submit" class="btn btn-default mt-6">
                                            
                                        </form>
                                        <?php
if(isset($_REQUEST["submit"]))
{
$id=$_REQUEST['category_id'];
$name=$_POST['category_title'];
$query = "update food_category set category_title='$name' where category_id=$id";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_cateory.php');
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