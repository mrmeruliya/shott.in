<?php
ob_start();
session_start();
if(isset($_REQUEST['scid']))
{
	$scid = $_REQUEST['scid'];
}
session_destroy();
header('location:index.php?scid='.$scid);
?>