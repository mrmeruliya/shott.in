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
                    
                    <div class="row mb-3">
                        
                        <div class="col-md-6">
                            
<!-- @ ~~~~~~~~~~~~~~~~~~~~ .breadcrumb -->
                            
                          
						  

                        </div><!-- // .col-md-6 --> 

                    </div><!-- // .row -->  
    
<!-- @ ~~~~~~~~~~~~ .row -->
                                
                    <div class="row">
                                    
                        <div class="col-lg-12">                    
                    
<!-- @ ~~~~~~~~~~~~~~~~~~~~ .panel -->
                            
         
                            <div class="panel mb-0" role="region" aria-label="panel title">
                                <p class="mb-6">
                                   <b> <b> <font size="4" color="black"> State :- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the State  information....</font></b>
                                
                                </p> 
								<?php
                               $query="SELECT * FROM state";
                               $result=mysqli_query($con,$query);

 ?>
  <form enctype="multipart/form-data">
 <div align="center">
                                <table class="table" id="table">
                                    <thead>
									 <tr>
                                            <td colspan="5" align="right" ><a href="state_form.php"> <i class="fa fa-plus"></i>&nbsp; </a><a href="state_form.php"> <b>add  state </b></a>
                                            </td>
                                     </tr>
                                     <tr>
									        <th> state Id </th>
                                            <th> state Name </th>
											<th> country name </th>
                                            <th> delete</th>
                                            <th> update </th>
									 </tr>
                                    </thead>
                                    <tbody>
									<tr>
									

<?php 
$id=1;

		while($row=mysqli_fetch_array($result))
		{
			?> 
<td><?php echo $id++; ?> </td>
<td><?php  echo htmlentities($row['1']); ?></td>
  <td><?php
   $id=$row[0];
                               $query1="SELECT * FROM country INNER JOIN state ON country.country_id=state.country_id and state_id=$id";						
                               $result1=mysqli_query($con,$query1);
							   
 	while($row1=mysqli_fetch_array($result1))
		{
       echo htmlentities($row1['country_name']); 
 }
 
 ?></td>


 <td> <a href="delete.php?state_id=<?php echo $row[0];?>">  <i class="fa fa-remove"></i></a>  </td>
<td> <a href="update.php?state_id=<?php echo $row[0];?>">  <i class="fa fa-edit"></i></a>   </td>
 </tr>
 <?php
 
 }
 ?>
								
                                       				
                                    </tbody>
                                </table>                                
</div>
</form>
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