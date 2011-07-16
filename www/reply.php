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

$id=$_POST['id'];
$answer=$_POST['reply'];
$name=$_SESSION['SESS_FIRST_NAME'];
$id1=$_SESSION['SESS_ID'];
$datetime=date("y/m/d H:i:s"); 
	mysql_select_db("project", $con);
        $qry2=mysql_query("UPDATE members set posts=posts+1 where id=$id1"); 
	$qry1=mysql_query("UPDATE threads SET replies=replies+1 WHERE id=$id");
	$qry = "INSERT INTO answers(id,answer,name,datetime) VALUES('$id','$answer','$name','$datetime')";
	$result = @mysql_query($qry);
	if($result)
	{
		echo "Successful</br>";
		echo "<a href=all-threads.php>View your topic</a>";
	}
	else 
	{
		echo "ERROR";
	}
mysql_close();
?>
</body>
</html>
