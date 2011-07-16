<?php
	require_once('auth.php');
	
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Member Index</title>
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php 
	include("menu.htm"); 
	include("config.php"); 
?>
</br></br></br></br></br></br></br></br>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>


<h>Please choose your required option from the top menu<h></br></br>

<?php
	$id=$_SESSION['SESS_ID'];
 
	$sql=mysql_query("SELECT * FROM members WHERE id=$id") or die(mysql_error());
	$rows=mysql_fetch_array($sql);
	$datetime=$rows['last'];

 	$sql1=mysql_query("SELECT * FROM threads WHERE datetime > '$datetime'") ;
	$count=0;
	$counts=0;
	while($rows=mysql_fetch_array($sql1))
	{
		$count=$count+1;

	}
	
	$sql2=mysql_query("SELECT * FROM answers WHERE datetime > '$datetime'") ;

	while($rows=mysql_fetch_array($sql2))
	{
		$counts=$counts+1;

	}

echo "No of new threads since your last visit: ".$count."    ";
echo "No of new posts since your last visit: ".$counts;

mysql_close();
?>
</body>
</html>
