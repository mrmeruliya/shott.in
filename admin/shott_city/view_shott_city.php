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
                                   <b> <b> <font size="4" color="black"> City :- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the City's information....</font></b>
                                
                                </p> 
								<?php
                               $query="SELECT * FROM shott_city";
                               $result=mysqli_query($con,$query);
 ?>
  <form enctype="multipart/form-data">
 <div align="center">
                                <table class="table" id="table">
                                    <thead>
									 <tr>
                                            <td colspan="4" align="right" >	<a href="city_form..php"> <i class="fa fa-plus"></i>&nbsp; </a><a href="city_form.php"> <b>add  city </b></a>
                                            </td>
                                     </tr>
                                     <tr>
									        <th> City Id </th>
                                            <th> City Name </th>
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
<td><?php  echo htmlentities($row['shott_city_name']); ?></td>
 <td> <a href="delete.php?shott_city_id=<?php echo $row[0];?>"> <i class="fa fa-remove"></i></a>  </td>
<td> <a href="update.php?shott_city_id=<?php echo $row[0];?>">  <i class="fa fa-edit"></i></a>   </td>
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