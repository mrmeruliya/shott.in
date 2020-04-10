
<?php
include "../include/connection.php";
$name=$_POST['category_title'];
$query = "insert into food_category(category_id,category_title) values(NULL,'$name')";
		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_category.php');
		}
		?>
