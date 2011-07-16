<html>
<head>


<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="header">MY WEBSITE</div></br>

<?php
	
	require_once('auth.php');
        include("menu.htm"); 
	include("config.php");
$id=$_GET['id'];
$sql="DELETE FROM sentmsgs WHERE message_id=$id";
$result=mysql_query($sql);	

echo "message delted";
mysql_close();
?>
</body>
</html>