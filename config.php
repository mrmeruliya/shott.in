<?php
$host = "localhost"; // Hostname
$port = "3306"; // MySQL Port : Default : 3306
$user = "root"; // Username Here
$pass = ""; //Password Here
$db   = "shotts"; // Database Name
$dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);
?>
