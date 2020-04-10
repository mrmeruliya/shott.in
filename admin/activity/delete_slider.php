<?php
include "../include/connection.php";
$fid=$_GET['activity_images_id'];
$query1="SELECT * FROM activity i1,activity_images e1 where i1.activity_id=e1.activity_id and i1.activity_images_id=$fid";

$result1=mysqli_query($con,$query1);
$row12=mysqli_fetch_array($result1);        
unlink($row12['activity_images_url']);
$q="delete from activity_images where activity_images_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_activity.php');
}

?>

