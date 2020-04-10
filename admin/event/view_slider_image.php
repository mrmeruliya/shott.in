
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
                    
<!-- @ ~~~~~~~~~~~~ .row -->
                    
                   
    
<!-- @ ~~~~~~~~~~~~ .row -->
                                
                    <div class="row">
                                    
                        <div class="col-lg-12">                    
                    
<!-- @ ~~~~~~~~~~~~~~~~~~~~ .panel -->
                            
                            <div class="panel mb-0" role="region" aria-label="panel title">
                                <p class="mb-6">
                                   <b> <b> <font size="4" color="black"> Event image :- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the Events images....</font></b>
                                
                                </p> 
	
								<?php
								 $id = $_REQUEST['event_id'];
                               $query="SELECT *from event_images where event_id=$id";
                               $result=mysqli_query($con,$query);
 

 ?>
 
                              <div class="row">
<?php 
$id=1;
$i=0;
		while($row=mysqli_fetch_array($result))
		{
		if($i%3==0)
		{
		?>
		
                                
                                    <div class="col-md-4">
                                
                                        <div class="card mb-6">
                                            <img height="250px" width="130px" class="card-img-top" src="<?php echo $row['event_images_url'];?>" alt="Card image cap">
                                            <div class="card-body">
                                                <a href="delete_slider.php?event_images_id=<?php echo $row[0];?>" class="btn btn-primary mt-4">Remove</a>
                                            </div>
                                        </div>
                                        
                                    </div><!-- // .col-md-4 -->                                    
                                    
                                   
                                    
                                                                     
                                    
                               
		<?php   }  } $i++; ?>
		
		  </div><!-- // .row --> 
	
  
							 </div> 
			

                                                                
</div>
                 <?php 
 mysqli_close($con);
 ?>           
                                
 
                            </div><!-- // .panel --> 
                            
                        </div><!-- // .col-lg-12 -->                             

                    </div><!-- // .row -->

                </div><!-- // .inner -->

            </div><!-- // .main -->            
                                    
        </div><!-- // .container --> 
<?php
include "../include/footer.php";
?>


 