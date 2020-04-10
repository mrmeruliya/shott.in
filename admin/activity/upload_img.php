<?php

ob_start();
include "../include/connection.php";

$id = $_REQUEST['id'];

//	print_r($_POST);
//print_r($_FILES);

	if(!empty($_FILES))
	//if(($_FILES)>0)
	{	

		$allowed =  array('gif','png' ,'jpg','jpeg','PNG','JPG','JPEG','GIF');
		$filename = $_FILES['file']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) 
		{
			echo 'error';
		}
		else
		{
		
			$con->query("INSERT INTO activity_images (activity_images_id,activity_id) VALUES(NULL,'$id')");
			$last_id=$con->insert_id;
		
			$targetDir = "picture1/";
			$fileName = $_FILES['file']['name'];
			$targetFile = $targetDir.$fileName;
		    
			if(move_uploaded_file($_FILES['file']['tmp_name'],"picture1/".$last_id.$_FILES['file']['name']))
			{
				//insert file information into db table
				
				$fileName = $last_id.$_FILES['file']['name'];
				echo $con->query("update activity_images set activity_images_url='picture1/".$fileName."' where activity_images_id = $last_id");		
			}
		
		header('location:view_slider_image.php?activity_id='.$id);
	}
	}
	else
	{
		header('location:view_slider_image.php?activity_id='.$id);

    } 
	
?>

