<?php
include "../include/connection.php";
$fid=$_GET['sub_category_id'];
$query1="SELECT * FROM food_sub_category s,food_category f where f.category_id=s.category_id and sub_category_id=$fid";
$q="delete from food_sub_category where sub_category_id=$fid ";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_food_sub_category.php');
}

?>
