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
                                        
                                        <form method="POST"  enctype="multipart/form-data"  action="slider_insert.php" >                                         
                                           
											  <div class="form-group">
                                                <label for="ff03">slider images:</label>
                                                <input type="file" name="slider_images" 
                                                       class="form-control" id="ff03"/>
                                               </div> 
                                             <div class="form-group">
                                                <label for="ff04">slider title:</label>
                                                <input type="text" name="slider_title"  placeholder="Type your slider name" 
                                                       class="form-control" id="ff04"/>
                                                </div>
                                           
                                            <a href="" class="btn btn-outline-default mt-6 mr-1">Reset form</a>
                                            <input type="submit" name="submit" class="btn btn-default mt-6">
                                            
                                        </form>
                                        
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