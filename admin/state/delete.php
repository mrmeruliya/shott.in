<?php
include "../include/connection.php";
$sid=$_GET['state_id'];
$query1="SELECT * FROM state s,country c where s.country_id=c.country_id and state_id=$sid";
$q="delete from state where  state_id=$sid ";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_state.php');
}

?>

