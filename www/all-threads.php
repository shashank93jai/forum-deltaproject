<html>
<head>
<title>All threads</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php 
	include("menu.htm");
	require_once('auth.php');
 	include("config.php");

	$sql="SELECT * FROM threads ORDER BY id DESC";
	$result=mysql_query($sql);
?>

<table id="tab" border="1" align="center" cellpadding="3" cellspacing="1" >
<tr></br></br></br></br>
<th>#</th>
<th>Subject</th>
<th>Views</th>
<th>Replies</th>
<th>Date time</th>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td align="left"><? echo $rows['id']; ?></td>
<td align="left"><a href="view-topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['subject']; ?></a></br></td>
<td align="left"><?echo $rows['views'];?></td>
<td align="left"><? echo $rows['replies'];?></td>
<td align="left"><? echo $rows['datetime']; ?></td>
</tr>

<?php

}
mysql_close();
?>
</table>
<a href="create-thread.php">Create New thread</a>
</body>
</html>

