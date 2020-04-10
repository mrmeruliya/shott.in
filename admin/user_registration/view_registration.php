<?php
ob_start();
include "../include/header.php";
include "../include/menu2.php";
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
                                   <b> <b> <font size="4" color="black"> Registration:- </font> </b> </b>
								    <br>
                                   <b> <font size="2" color="grey"> This page displays all the Registered user'S information....</font></b>
                                
                                </p> 
								<?php
                               $query="SELECT * FROM user_registration";
                               $result=mysqli_query($con,$query);

 ?>
  <form enctype="multipart/form-data">
 <div align="center">
                                <table class="table" id="table">
                                    <thead>
									 <tr>
                                            <td colspan="13" align="right" ><a href="registration_form.php"> <i class="fa fa-plus"></i>&nbsp; </a><a href="registration_form.php"> add user </a>
                                            </td>
                                     </tr>
                                     <tr>
                                            <th>user id</th>
                                            <th> firstname</th>
                                            <th> lastname </th>
											<th> user type </th>
                                            <th> email id</th>
											<th>  password</th>
								    		<th>  mobile no </th>
											<th> date of birth </th>
											<th> shott city name </th>
											<th>  state name </th>
											<th>  country name </th>
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
<td> <?php echo htmlentities($row[2]); ?> </td>
<td><?php echo htmlentities($row[3]); ?></td>
<td><?php echo htmlentities($row[4]); ?></td>
<td><?php echo htmlentities($row[5]); ?></td>
 <td><?php echo htmlentities($row[6]); ?></td>
  <td><?php echo htmlentities($row[7]); ?></td>
   <td><?php
    $id=$row[0];
                               $query1="SELECT * FROM shott_city INNER JOIN user_registration ON shott_city.shott_city_id=user_registration.shott_city_id  and user_id=$id";		
                               $result1=mysqli_query($con,$query1);
 	while($row1=mysqli_fetch_array($result1))
		{
       echo htmlentities($row1['shott_city_name']); 
 }
 ?></td>
<td><?php
  $id=$row[0];
                               $query1="SELECT * FROM state INNER JOIN user_registration ON state.state_id=user_registration.state_id  and user_id=$id";		
                               $result1=mysqli_query($con,$query1);
							   
 	while($row1=mysqli_fetch_array($result1))
		{
            echo htmlentities($row1['state_name']); 
        }
 ?></td>
<td><?php
                    $id=$row[0];            
					$query1="SELECT * FROM country INNER JOIN user_registration ON country.country_id=user_registration.country_id and user_id=$id";		
                               $result1=mysqli_query($con,$query1);
							   
 	while($row1=mysqli_fetch_array($result1))
		{
       echo htmlentities($row1['country_name']); 
 }
 
 ?></td>

<td> <a href="delete.php?user_id=<?php echo $row[0];?>">  <i class="fa fa-remove"></i></a>  </td>
<td> <a href="update.php?user_id=<?php echo $row[0];?>">  <i class="fa fa-edit"></i></a>   </td>
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