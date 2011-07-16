<?php
session_start();	
include("config.php");
   $datetime=date("y/m/d H:i:s");
$id=$_SESSION['SESS_ID'];
$sql=mysql_query("UPDATE members SET last='$datetime' WHERE id=$id");
	
	
	
	
	unset($_SESSION['SESS_FIRST_NAME']);
	
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Logged Out</title>

</head>
<body>
<div class="header">MY WEBSITE</div></br>
<h1>Logout </h1>

<h align="center">You have been logged out.</h>
<p align="center">Click here to <a href="login-form.php">Login</a></p>
</body>
</html>
