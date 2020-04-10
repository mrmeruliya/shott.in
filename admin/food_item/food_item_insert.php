<?php
include "../include/connection.php";
$name=$_POST['food_item_title'];
$food_item_pricing=$_POST['food_item_pricing'];
$sub_category_title=$_POST['sub_category_title'];
$query = "insert into food_item(food_item_id,food_item_title,food_item_pricing,sub_category_id) values(NULL,'$name','$food_item_pricing','$sub_category_title')";
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_food_item.php');
		}
		?>
