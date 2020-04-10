<?php
include "../include/connection.php";
$fid=$_GET['slider_id'];
$query1="SELECT * FROM slider where slider_id=$fid";
$q="delete from slider where slider_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_slider.php');
}

?>
