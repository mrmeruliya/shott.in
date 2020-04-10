
<?php
include "../include/connection.php";
$slider_title=$_POST['slider_title'];
$query = "insert into slider(slider_id,slider_title)values(NULL,'$slider_title')";

		if(!mysqli_query($con,$query))
		{
		     mysqli_error($con);
		}
		else
{
		$last_id=$con->insert_id;
		move_uploaded_file($_FILES['slider_images']["tmp_name"],"picture/".$last_id.$_FILES['slider_images']['name']);
		$sql1="update slider set slider_images='picture/".$last_id.$_FILES['slider_images']['name']."' where slider_id=$last_id";

		if(!mysqli_query($con,$sql1))
		{
		     mysqli_error($con);
		}
		else
		{
		header('location:view_slider.php');
		}
}


?>

