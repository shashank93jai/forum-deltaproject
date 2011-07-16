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
$name=$_SESSION['SESS_FIRST_NAME'];
include("config.php");
$messageid = $_GET['id'];

$sql = mysql_query("SELECT * FROM recdmsgs WHERE message_id = '$messageid' AND to_user = '$login'");
$message=mysql_fetch_array($sql);
echo "<h><strong>Title</strong>: ".$message['message_title']."</h><br>";
echo "<p><strong>From:</strong>: ".$message['to_user']."<br></p>";
echo "<p><strong>Message</strong>: ".$message['message_contents']."</p>";

?>
<a href="deleterecd.php?id=<? echo $message['message_id']; ?>">Delete</a>
<?php mysql_close(); ?>
</body>
</html>