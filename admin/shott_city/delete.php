<?php
include "../include/connection.php";
$fid=$_GET['shott_city_id'];
$query1="SELECT * FROM city_table where shott_city_id=$fid";
$q="delete from shott_city where shott_city_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_shott_city.php');
}

?>
?>
