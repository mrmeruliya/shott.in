<?php
include "../include/connection.php";
$fid=$_GET['country_id'];
$query1="SELECT * FROM country where country_id=$fid";
$q="delete from country where country_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_country.php');
}

?>

