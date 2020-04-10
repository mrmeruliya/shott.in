<?php
include "../include/connection.php";
$cid=$_GET['city_id'];
$query1="SELECT * FROM city c,state s where s.state_id=c.state_id and citye_id=$cid";
$q="delete from city where  city_id=$cid ";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_city.php');
}

?>
