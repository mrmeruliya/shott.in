<?php
ob_start();
session_start();
include "connection.php";

echo $event_id=$_POST['event_id'];
//echo '<br>';
$scid=$_POST['scid'];

if(!isset($_SESSION['user_name']))
{
	header('location:login.php?scid='.$scid);
}
else
{
$user_id = $_SESSION['user_id'];
echo $event_booking_date=$_POST['book_date'];
//echo '<br>';
$no_of_person=$_POST['no_of_person'];
$email=$_POST['email'];
$contact_no=$_POST['contact'];
$method=$_POST['method'];



echo $query_select = "select * from event_booking where event_booking_date = '$event_booking_date' and event_id = $event_id";
//echo $query_select = "select * from event_booking where event_id = $event_id";
//echo '<br>';
$result_select = mysqli_query($con,$query_select);
$row_select = mysqli_fetch_array($result_select);
echo $count = mysqli_num_rows($result_select);

	if($count > 0)
	{
	
		header('location:event_details.php?q1=1&scid='.$scid.'&eid='.$event_id);
	}
	else
	{
		$query = "insert into event_booking(event_booking_id,event_booking_date,no_of_person,contact_no,email,prefere_method,user_id,event_id)values(NULL,'$event_booking_date','$no_of_person','$contact_no','$email','$method','$user_id','$event_id')";
		
			if(!mysqli_query($con,$query))
			{
				 mysqli_error($con);
			}
			else
			{
				header('location:event_details.php?q2=1&scid='.$scid.'&eid='.$event_id);
			}
	}

	
}
?>

