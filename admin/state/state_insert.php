
<?php
include "../include/connection.php";
$name=$_POST['state_name'];
$c_name=$_POST['country_name'];
$query = "insert into state(state_id,state_name,country_id) values (NULL,'$name','$c_name')";
        if(!mysqli_query($con,$query))
		{
		  echo   mysqli_error($con);
			 
		}
		else
		{
		header('location:view_state.php');
		}
		?>
