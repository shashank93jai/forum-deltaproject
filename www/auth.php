<?php
	
	session_start();
	
	if(!isset($_SESSION['SESS_FIRST_NAME']) || (trim($_SESSION['SESS_FIRST_NAME']) == '')) 
	{
		header("location: access-denied.php");
		exit();
	}
?>