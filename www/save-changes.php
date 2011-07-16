<?php
	include("config.php");


	mysql_select_db("project", $con);
	
	
	function clean($str) 
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) 
		{
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}


	$email=clean($_POST['mail']);
	$fname = clean($_POST['name']);
	$login = clean($_POST['login']);
	$age=clean($_POST['age']);
	$phone=$_POST['ph'];
	$interests=$_POST['interests'];
	$id=$_POST['id'];
  	$qry ="UPDATE members SET age='$age',firstname='$fname',email='$email',login='$login',phone='$phone',interests='$interests' WHERE id=$id ";
	$result = @mysql_query($qry);
	
	
	if($result) {
		header("location:http://localhost/www/my-profile.php");
		exit();
	}else {
		die("Query failed");
	}
?>
	