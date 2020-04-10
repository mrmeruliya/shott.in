
<?php
include "../include/connection.php";
$country_name=$_POST['country_name'];
$query = "insert into country(country_id,country_name)values(NULL,'$country_name')";
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_country.php');
		}
		?>
