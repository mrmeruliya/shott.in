<?php
ob_start();
session_start();

$scid = $_POST['scid'];


if(isset($_SESSION['user_name']))
{
	header('location:index.php?scid='.$scid);
}
else
{	
	include("config.php");
	
	$emailid = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
	$password = md5($password);
	
	$sql = "SELECT * FROM user_registration WHERE email_id=:email_id";
	$statement = $dbh->prepare($sql);
	$statement->bindValue(':email_id', $emailid, PDO::PARAM_STR);
	$statement->execute();
	$row_count = $statement->rowCount();
	$r=$statement->fetch();
	
	if($row_count == 1)
	{
			$p=$r['password'];
			$key=$r['p_salt'];
			$site_salt="keviritetodistupassword";
		
		$vowels = array("a", "e", "u", "A", "E", "U");
		$site_salt = str_replace($vowels, "", $site_salt);	
		$site_salt= md5($site_salt);
		
		$encrypt_method = "AES-256-CBC";
		
		$iv = substr( hash( 'sha256', $site_salt ), 0, 16 );
		
		$salted_hash = base64_encode( openssl_encrypt( $password, $encrypt_method, $key, 0, $iv ) );
			 
		
		
		
		if($p==$salted_hash)
		{
		
			
				 if($r['user_type'] == 'user')
				{
					
					echo $_SESSION['user_id'] = $r['user_id'];
					echo $_SESSION['user_name'] = $r['first_name'];
					$user_id = $_SESSION['user_id'];
					
					header('location:index.php?scid='.$scid);
					
				}
				
		}
		else
		{
			
				
				header('location:login.php?q1=2&scid='.$scid);
				
				
		}
			
	}
else
{
	
		
		header('location:login.php?q1=1&scid='.$scid);
		
		
}
	
	
	
	
}
?>
