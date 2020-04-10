
<?php
ob_start();
include "../include/connection.php";
$firstname=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_type=$_POST['user_type'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$date_of_birth=$_POST['date_of_birth'];
$shott_city_name=$_POST['shott_cn'];
$state_name=$_POST['state_s'];
$country_name=$_POST['country_c'];
$query = "insert into user_registration(user_id,first_name,last_name,user_type,email_id,password,mobile_no,date_of_birth,shott_city_id,state_id,country_id) values(NULL,'$firstname','$last_name','$user_type','$email_id','$password','$mobile_no','$date_of_birth','$shott_city_name','$state_name','$country_name')";
echo $query;
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_registration.php');
		}
?>

