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
                        
                            <div class="panel mb-0" role="region" aria-label="panel title">                                <p class="mb-6">
                                   <b> <b> <font size="4" color="black"> Event :- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the Event information....</font></b>
                                
                                </p> 
								 
								<?php
                               $query="SELECT * FROM event";
                               $result=mysqli_query($con,$query);
 
 ?>
  <form method="POST" enctype="multipart/form-data" >
 <div align="center">
                                <table class="table" id="table">
                                    <thead>
									 <tr>
									 
                                            <td colspan="12" align="right" ><a href="event_form.php"> <i class="fa fa-plus"></i>&nbsp; </a><a href="event_form.php"> <b><i>add event</b></i></a>
                                            </td>
                                     </tr>
                                     <tr>
                                            <th> event id</th>
                                            <th> event title </th>
                                            <th> event image </th>
											<th> event text </th>
                                            <th> event time </th>
											<th> event pricing </th>
								            <th> event technology </th>
											<th> deals and package </th>
											<th> event image slider </th>
											<th> shott city </th>
											<th> delete </th>
                                            <th> update </th>
									</tr>
                                    </thead>
                                    <tbody>
									<tr>
									
<tr>

<?php 
$no=1;

		while($row=mysqli_fetch_array($result))
		{
			?> 
<td><?php echo $no++; ?> </td>
<td><?php  echo htmlentities($row[1]); ?></td>
<td> <img src="<?php echo $row[2] ?>"  width="100px"  height="100px" ></td>
<td> <?php echo htmlentities($row[3]); ?> </td>
<td><?php echo htmlentities($row[4]); ?></td>
<td><?php echo htmlentities($row[5]); ?></td>
 <td><?php echo htmlentities($row[6]); ?></td>
  <td><?php echo htmlentities($row[7]); ?></td>

 <div class="form-group">
  <td>
	<a href="add_new_img.php?id=<?php echo $row[0];?>"> <input value="add slider image" class="btn btn-outline-primary mb-2 mr-2"></a>
   <a href="view_slider_image1.php?id=<?php echo $row[0];?>"><input value="view slider image" class="btn btn-outline-primary mb-2 mr-2"></a>
  </td>
 <td><?php
 $id=$row[0];
                               $query1="SELECT * FROM shott_city INNER JOIN event ON shott_city.shott_city_id=event.shott_city_id and event_id=$id";						
                               $result1=mysqli_query($con,$query1);
							   
 	while($row1=mysqli_fetch_array($result1))
		{
       echo htmlentities($row1['shott_city_name']); 
 }
 
 ?></td>

 <td> <a href="delete.php?event_id=<?php echo $row[0];?>"> <i class="fa fa-remove"></i></a>  </td>
 <td> <a href="update.php?event_id=<?php echo $row[0];?>"><i class="fa fa-edit"></i></a>   </td>
 </tr>
 <?php
 
 }
 ?>
									</tr>
                                       				
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