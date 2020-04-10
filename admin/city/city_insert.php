
<?php
include "../include/connection.php";
$name=$_POST['city_name'];
$s_name=$_POST['state_name'];
$query = "insert into city(city_id,city_name,state_id) values (NULL,'$name','$s_name')";

        if(!mysqli_query($con,$query))
		{
		  echo   mysqli_error($con);
			 
		}
		else
		{
		header('location:view_city.php');
		}
		?>
