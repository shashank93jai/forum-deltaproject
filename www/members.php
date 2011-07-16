<html>
<head>
<title>All threads</title>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="header">MY WEBSITE</div></br>
<?php include("menu.htm");
	require_once('auth.php');
	
	include("config.php");
$sql="SELECT * FROM members";
$result=mysql_query($sql);
?>
</br></br></br><?php
while($rows=mysql_fetch_array($result))
{
?>
*<a href="profiles.php?id=<? echo $rows['id']; ?>"><? echo $rows['firstname']; ?></a></br>
<?php

}
mysql_close();
?>
</body>
</html>