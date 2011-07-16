<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<title>Sent</title>
<body>
<div class="header">MY WEBSITE</div></br>
<?php
 include("menu.htm");
require_once("auth.php");
	include("config.php");

$userfinal=$_SESSION['SESS_FIRST_NAME'];
$login=$_SESSION['SESS_LOGIN'];

$sql = "SELECT * FROM sentmsgs WHERE from_user='$userfinal' ORDER BY message_id DESC" or die(mysql_error());
$result=mysql_query($sql);
?>
</br></br></br></br></br></br></br>
<table id="tab">
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td> To:<? echo $rows['to_user']; ?>    </td>
<td><a href="sent.php?id=<? echo $rows['message_id']; ?>"><? echo $rows['message_title']; ?>     </a></td>

<td>  <? echo $rows['datetime']; ?>   </td>
<td><a href="deletesent.php?id=<? echo $rows['message_id']; ?>">Delete   </a></td> 
</tr>
<?php
}
mysql_close();
?>
</table>
</body>
</html>