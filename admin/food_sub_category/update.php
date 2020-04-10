<?php
ob_start();
include "../include/header.php";
include "../include/menu.php";
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
                                              $id = $_REQUEST['sub_category_id'];
                                              $con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysql_error());
                                              $query="SELECT * FROM food_sub_category where sub_category_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>
                                            <form method="POST" action="update.php" >                                         
                                            
											  <div class="form-group">
                                              
                                                <input type="hidden" name="sub_category_id" id="sub_category_id" value="<?php echo $id; ?>"/>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="ff02">sub category title:</label>
                                                <input type="text" name="sub_category_title"  placeholder="Type your food category name" 
                                                       class="form-control" id="ff02"  value="<?php echo $row['sub_category_title']; ?>"  required/>
                                                
                                            </div>
                                            <a href="" class="btn btn-outline-default mt-6 mr-1">Reset form</a>
                                            <input type="submit" name="submit" class="btn btn-default mt-6">
                                            
                                        </form>
                                        <?php
if(isset($_REQUEST["submit"]))
{
$id=$_REQUEST['sub_category_id'];
$title=$_POST['sub_category_title'];
$con=mysqli_connect("localhost","root","","project1") or die ("can't connect: Error=".mysqli_error());

$query = "update food_sub_category set sub_category_title='$title' where sub_category_id=$id";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_food_sub_category.php');
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