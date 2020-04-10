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
                                   <b> <b> <font size="4" color="black"> Event Booking  :- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the Event's booking information....</font></b>
                                
                                </p> 
								<?php
                               $query="SELECT * FROM event_booking";
                               $result=mysqli_query($con,$query);
 ?>
  <form enctype="multipart/form-data">
 <div align="center">
                                <table class="table" id="table">
                                    <thead>
									 <tr>
                                            <td colspan="8" align="right" >	<a href="event_booking_form.php"> <i class="fa fa-plus"></i>&nbsp; </a><a href="event_booking_form.php"> <b>add event booking  </b></a>
                                     </tr>
                                     <tr>
                                            <th>event booking id</th>
                                            <th>event booking date</th>
                                            <th> no of person </th>
                                             <th> contact no </th> 
                                              <th> user_id </th>
											<th> delete</th>
                                            <th> update </th>
									 </tr>
                                    </thead>
                                    <tbody>
									<tr>
									
<tr>

<?php 
$id=1;

		while($row=mysqli_fetch_array($result))
		{
			?> 
<td><?php echo $id++; ?> </td>
<td><?php  echo htmlentities($row[1]); ?></td>
<td><?php  echo htmlentities($row[2]); ?></td>
<td><?php  echo htmlentities($row[3]); ?></td>
<td><?php
 $id=$row[0];
                               $query1="SELECT * FROM user_registration INNER JOIN event_booking ON user_registration.user_id=event_booking.user_id and event_booking_id=$id";		
                               $result1=mysqli_query($con,$query1);
							   
 	while($row1=mysqli_fetch_array($result1))
		{
       echo htmlentities($row1['first_name']); 
	    echo htmlentities($row1['last_name']); 
 }
 
 ?></td>
 <td> <a href="delete.php?event_booking_id=<?php echo $row[0];?>"> <i class="fa fa-remove"></i></a>  </td>
<td> <a href="update.php?event_booking_id=<?php echo $row[0];?>">  <i class="fa fa-edit"></i></a>   </td>
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