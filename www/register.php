<?php
	
	session_start();
	include("config.php");
	
	
	function clean($str) 
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) 
		{
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	$email=clean($_POST['email']);
	$fname = clean($_POST['fname']);
	$login = clean($_POST['login']);
	$password = clean($_POST['pass']);
	
	
	
        if($login != '')
	{
	
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result)>0) 
			{
				echo("login already in use, register with a different login");
				exit();
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	$qry = "INSERT INTO members(firstname, email, login, passwd) VALUES('$fname','$email','$login','$password')";
	$result = @mysql_query($qry);
	
	
	if($result) {
		header("location:http://localhost/www/register-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>
?>