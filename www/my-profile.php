<html>
<head>
<title>All threads</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="header">MY WEBSITE</div></br>

<?php
	
	require_once('auth.php');
        include("menu.htm"); 
	include("config.php");
	
$id=$_SESSION['SESS_ID'];
$sql="SELECT * FROM members WHERE id=$id";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?></br></br></br>
<table id="tab">
<tr>
<td>Name:</td><td><? echo $rows['firstname']; ?></td>
</tr>
<tr>
<td>Login:</td><td><? echo $rows['login']; ?></td>
</tr>
<tr>
<td>Emailid:</td><td><? echo $rows['email']; ?></td>
</tr>
<tr>
<td>Age:</td><td><? echo $rows['age']; ?></td>
</tr>
<tr>
<td>phone:</td><td><? echo $rows['phone']; ?></td></br>
</tr>
<tr>
<td>Interests:</td><td><? echo $rows['interests']; ?></td></br>
</tr>
<tr>
<td>No of threads created:</td><td><? echo $rows['threads']; ?></td></br>
</tr>
<tr>
<td>No of posts:</td><td><? echo $rows['posts']; ?></td></br>
</tr>
</table>

</body>
</html>


