<?php
include "../include/connection.php";
$fid=$_GET['event_id'];
$query1="SELECT * FROM event i1,shott_city i2 where i1.shott_city_id=i2.shott_city_id and i1.event_id=$fid";
$result1=mysqli_query($con,$query1);
$row12=mysqli_fetch_array($result1);        
unlink($row12['event_img']);

$q="delete from event where event_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_event.php');
}

?>

