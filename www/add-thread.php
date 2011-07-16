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


	$topic=$_POST['subject'];
	$detail=$_POST['message'];
	$name=$_SESSION['SESS_FIRST_NAME'];
	$id1=$_SESSION['SESS_ID'];
	$datetime=date("y/m/d H:i:s"); 

	$sql=mysql_query("UPDATE members SET threads=threads+1 WHERE id=$id1");
	$sql="INSERT INTO threads(subject, message, name, datetime)VALUES('$topic', '$detail', '$name', '$datetime')";
	$result=mysql_query($sql);
?>
</br></br></br>
<?php
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
