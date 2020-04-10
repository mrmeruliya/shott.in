
<?php
include "../include/connection.php";
$name=$_POST['city_name'];
$query = "insert into shott_city(shott_city_id,shott_city_name) values(NULL,'$name')";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_shott_city.php');
		}
		?>
