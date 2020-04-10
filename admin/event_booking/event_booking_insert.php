
<?php
ob_start();
include "connection.php";
$event_booking_date=$_POST['date'];
$no_of_person=$_POST['guest'];
$contact_no=$_POST['contact'];
$email=$_POST['email'];
$user_name=$_POST['name'];
$method=$_POST['method'];

$query = "insert into event_booking(event_booking_id,event_booking_date,no_of_person,contact_no,name,email,prefere_method,user_id)values(NULL,'$event_booking_date','$no_of_person','$contact_no','$user_name','$email','$method')";
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_event_booking.php');
		}



?>

