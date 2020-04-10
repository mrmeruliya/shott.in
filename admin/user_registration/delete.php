<?php
include "../include/connection.php";
$fid=$_GET['user_id'];
$query1="SELECT * FROM user_registration where user_id=$fid";


$q="delete from user_registration where user_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_registration.php');
}

?>

