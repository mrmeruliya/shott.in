
<?php
include "../include/connection.php";
$name=$_POST['sub_category_title']; 
$c_name=$_POST['category_title']; 
$query = "insert into food_sub_category(sub_category_id,sub_category_title,category_id) values (NULL,'$name','$c_name')";

        if(!mysqli_query($con,$query))
		{
		  echo   mysqli_error($con);
			 
		}
		else
		{
		header('location:view_food_sub_category.php');
		}
		?>
