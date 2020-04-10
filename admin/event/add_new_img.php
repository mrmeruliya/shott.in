<?php
ob_start();
include "../include/header.php";
include "../include/menu.php";
include "../include/connection.php";

?>      
<!-- @  .container -->      
<link rel="stylesheet" type="text/css" href="dropzone.css" />
<script type="text/javascript" src="dropzone.js"></script>

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
                                              $id = $_REQUEST['id'];
                                              $query="SELECT * FROM event where event_id=$id";
                                              $result=mysqli_query($con,$query);
                                              $row=mysqli_fetch_array($result);
                                        ?>

				
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Event id - <?php echo $row['event_id'];?></b></h4>
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>Add New Images. | Select Only png,jpg,jpeg or gif file.</b></h4>
                            <h4 class="m-t-0 header-title" style="margin-bottom:30px;text-align:center;margin-top:20px !important;"><b>(width:800px, height:960px)</b></h4>
                             <div class="row">
                               
							   <div class="col-md-12" >
                                <div class="image_upload_div">
									<form action="upload_img.php?id=<?php echo $id;?>" name="f1" id="f1" method="post" enctype="multipart/form-data" class="dropzone">
										<div class="form-group text-right m-b-0" style="text-align:center;">
										<button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Click Here To Upload All Images
										</button>
										
										</div>
									</form>
									
								</div>    
							   </div>
                            </div> 
					</div>
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