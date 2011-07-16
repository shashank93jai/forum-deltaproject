<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php
	include("menu.htm"); 
	require_once('auth.php');
 	include("config.php");
	
	$id=$_GET['answerid'];
	$sql=mysql_query("UPDATE answers SET dislikes=dislikes+1 WHERE answerid=$id");
	header("location: all-threads.php");
?>
</body>
</html>