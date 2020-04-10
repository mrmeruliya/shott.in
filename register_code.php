
<?php
ob_start();
include "config.php";

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_id=$_POST['email'];
$password=$_POST['password'];
$password = md5($password);	
$mobile=$_POST['mobile'];
$date_of_birth=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$scid=$_POST['scid'];

		$sql=$dbh->prepare("SELECT COUNT(*) FROM `user_registration` WHERE `email_id`=?");
		$sql->execute(array($email_id));
		if($sql->fetchColumn()!=0){
		
			header('location:register.php?q=1&scid='.$scid);
		}
		else
		{
			function rand_string($length) {
			  $str="";
			  $chars = "keviritetodistupasswordabcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			  $size = strlen($chars);
			  for($i = 0;$i < $length;$i++) {
			   $str .= $chars[rand(0,$size-1)];
			  }
			  return $str; 
			 }
			 
			 $p_salt = rand_string(20);
			 $vowels = array("a", "e", "u", "A", "E", "U");
			 $p_salt = str_replace($vowels, "", $p_salt);		
			 $p_salt = md5($p_salt);
			 
			 $site_salt="keviritetodistupassword";
			 $vowels = array("a", "e", "u", "A", "E", "U");
			 $site_salt = str_replace($vowels, "", $site_salt);		
			 $site_salt = md5($site_salt);
			 
			 $encrypt_method = "AES-256-CBC";
			 
			 $key = hash( 'sha256', $p_salt);
			 	
			 $iv = substr( hash( 'sha256', $site_salt ), 0, 16 );
			 
			 $salted_hash = base64_encode( openssl_encrypt( $password, $encrypt_method, $key, 0, $iv ) );
			 
			 $sql1=$dbh->prepare("INSERT INTO `user_registration` (`user_id`, `first_name`, `last_name`, `user_type`, `email_id`, `password`, p_salt, `mobile_no`, `date_of_birth`, `shott_city_id`, `state_id`, `country_id`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
			 if($sql1->execute(array($first_name, $last_name, 'user', $email_id, $salted_hash, $key, $mobile, $date_of_birth, $city, $state, $country)))
			 {
				
					header('location:login.php?scid='.$scid);
				
			 }
			 else
			 {
				print_r($sql1->errorInfo());
				
			 }
			
			 
		}


?>

