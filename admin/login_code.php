
<?php
session_start();
include "./include/connection.php";

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql1 = "select * from user_registration where email_id='$email' and password='$password'" ;
	$result1 = mysqli_query($con,$sql1);
	$rows1 = mysqli_fetch_array($result1);
	$type=$rows1['user_type'];

	
	$user_check=mysqli_num_rows($result1);

	if($user_check == 1)
	{
		
		
		if($type=="admin")
		{
			$_SESSION["admin_user_id"]=$rows1['user_id'];
			$_SESSION["admin_user_name"]=$rows1['first_name'];
			
			header("location:../admin/activity/view_activity.php"); 

		}

	}
	else
	{
	header("location:index.php?q1=1");
	}



}
?>
