<?php
include "../include/connection.php";
$fid=$_GET['category_id'];
$query1="SELECT * FROM food_category where category_id=$fid";
$q="delete from food_category where category_id=$fid";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_category.php');
}

?>
?>
