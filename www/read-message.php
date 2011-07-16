<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="header">MY WEBSITE</div></br>
<?php include("menu.htm"); ?></br></br></br></br></br>
<?php
	session_start();
	$login=$_SESSION['SESS_LOGIN'];
	include("config.php");

	$messageid = $_GET['messageid'];

	$sql1 =mysql_query("UPDATE sentmsgs SET message_read='1' WHERE message_id='$messageid' ");
	$sql2 =mysql_query("UPDATE recdmsgs SET message_read='1' WHERE message_id='$messageid' ");

	$sql = mysql_query("SELECT * FROM recdmsgs WHERE message_id = '$messageid' AND to_user = '$login'");
	$rows=mysql_fetch_array($sql);

echo "<h><strong>Title</strong>: ".$rows['message_title']."</h><br>";
echo "<p><strong>From</strong>: ".$rows['from_user']."<br></p>";
echo "<p><strong>Message</strong>: ".$rows['message_contents']."</p>";
?>
<a href="deleterecd.php?id=<? echo $rows['message_id'];?>">Delete</a>
</body>
</html>