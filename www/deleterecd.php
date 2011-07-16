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
$sql="DELETE FROM recdmsgs WHERE message_id=$id";
$result=mysql_query($sql);	
?></br></br></br></br>
<?php
echo "message deleted";
mysql_close();
?>
</body>
</html>