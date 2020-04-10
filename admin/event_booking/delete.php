<?php
include "../include/connection.php";
$fid=$_GET['event_booking_id'];
$query1="SELECT * FROM event_booking b,user_registration r where r.user_id=b.user_id and event_booking_id=$fid";
$q="delete from event_booking where event_booking_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_event_booking.php');
}

?>

