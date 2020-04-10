
<?php
ob_start();
include "../include/connection.php";

$activity_title=$_POST['activity_title'];
$activity_text=$_POST['activity_text'];
$activity_time=$_POST['activity_time'];
$activity_pricing=$_POST['activity_pricing'];
$activity_technology=$_POST['activity_technology'];
$deals_and_packages=$_POST['activity_deals_and_packages'];
$city=$_POST['shott_city'];
$query = "insert into activity(activity_id,activity_title,activity_text,activity_time,activity_pricing,activity_technology,activity_deals_and_packages,shott_city_id)values(NULL,'$activity_title','$activity_text','$activity_time','$activity_pricing','$activity_technology','$deals_and_packages','$city')";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
{
		$last_id=$con->insert_id;
	
		move_uploaded_file($_FILES['activity_image']["tmp_name"],"picture/".$last_id.$_FILES['activity_image']['name']);

		$sql1="update activity set activity_img='picture/".$last_id.$_FILES['activity_image']['name']."' where activity_id=$last_id";


		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_activity.php');
		}
}


?>

