<?php
	session_start();
	include("config.php");
	

	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	$login = clean($_POST['login']);
	$password = clean($_POST['pass']);
	

	$datetime=$datetime=date("d/m/y h:i:s");
	$qry="SELECT * FROM members WHERE login='$login' AND passwd='$password'";
	$result=mysql_query($qry);
	
	if($result) {
		if(mysql_num_rows($result) == 1) {
			echo "Login Successful";
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ID']=$member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			$_SESSION['SESS_LOGIN']=$member['login'];
  			session_write_close();
			header("location: member-index.php");
			exit();
		}else {
			
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>