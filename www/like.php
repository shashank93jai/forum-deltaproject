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
	$qid=$_GET['qid'];
	$id=$_GET['answerid'];
	$sql=mysql_query("UPDATE answers SET likes=likes+1 WHERE answerid=$id");
	header("location: view-topic.php?id=$qid");
?>
</body>
</html>