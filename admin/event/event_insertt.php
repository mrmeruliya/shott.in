<?php
include "../include/connection.php";
$event_title=$_POST['event_title']; 
$event_text=$_POST['event_text'];
$event_time=$_POST['event_time'];
$event_pricing=$_POST['event_pricing'];
$event_technology=$_POST['event_technology'];
$deals_and_packages=$_POST['event_deals_and_packages'];
$shott_city_id=$_POST['shott_city_name'];
$query = "insert into event(event_id,event_text,event_title,event_time,event_pricing,event_technology,event_deals_and_packages,shott_city_id)values(NULL,'$event_text','$event_title','$event_time','$event_pricing','$event_technology','$deals_and_packages','$shott_city_id')";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
{
		$last_id=$con->insert_id;
	
		move_uploaded_file($_FILES['event_image']["tmp_name"],"picture/".$last_id.$_FILES['event_image']['name']);

		$sql1="update event set event_img='picture/".$last_id.$_FILES['event_image']['name']."' where event_id=$last_id";


		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_event.php');
		}
}


?>




