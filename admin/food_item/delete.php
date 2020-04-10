<?php
include "../include/connection.php";
$fid=$_GET['food_item_id'];
$query1="SELECT * FROM food_item s,food_category f where s.category_id=f.category_id and food_item_id=$fid";



$q="delete from food_item where food_item_id=$fid ";
if(!mysqli_query($con,$q))
{
	echo mysqli_error($con);
}  
else 
{
	header('location:view_food_item.php');
}

?>

