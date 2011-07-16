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
<th align="center">#</th>
<th  align="center">Subject</th>
<th align="center">Views</th>
<th  align="center">Replies</th>
<th  align="center">Date time</th>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $rows['id']; ?></td>
<td><a href="view-topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['subject']; ?></a></br></td>
<td align="center"><?echo $rows['views'];?></td>
<td align="center"><? echo $rows['replies'];?></td>
<td align="center"><? echo $rows['datetime']; ?></td>
</tr>

<?php

}
mysql_close();
?>
</table>
<a href="create-thread.php">Create New thread</a>
</body>
</html>

