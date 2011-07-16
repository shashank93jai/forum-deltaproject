<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<title>INBOX</title>
<body>
<div class="header">MY WEBSITE</div></br>
<table id="tab">
<?php
 	include("menu.htm");
	require_once("auth.php");
	include("config.php");

	$userfinal=$_SESSION['SESS_FIRST_NAME'];
	$login=$_SESSION['SESS_LOGIN'];

	$sql = "SELECT * FROM recdmsgs WHERE to_user='$login' ORDER BY message_id DESC" or die(mysql_error());

	$result=mysql_query($sql);
	if($result)
	{

		while($rows=mysql_fetch_array($result))
		{
		?>
		<tr>
		<td> From:<? echo $rows['from_user']; ?>    </td>
		<td><a href="recd.php?id=<? echo $rows['message_id']; ?>"><? echo $rows['message_title']; ?>     </a></td>

		<td>  <? echo $rows['datetime']; ?>   </td>
		<td><a href="deleterecd.php?id=<? echo $rows['message_id']; ?>">Delete   </a></td> 
		</tr>
<?php
		}

	}
	else
	{
		echo "No messages in inbox";
	}
mysql_close();
?>
</table>
</body>
</html>