<html>
<head>
<title>Your Details</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="header">MY WEBSITE</div></br>
<?php
	include("menu.htm"); 
	require_once('auth.php');
        
	$id=$_SESSION['SESS_ID'];

	include("config.php");

$sql="SELECT * FROM members WHERE id=$id";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

</br></br></br></br></br></br></br>
<form method="post" action="save-changes.php">
<table>
<tr>
<td>NAME:</td><td><input type="text" name="name" id="name" value="<? echo $rows['firstname']; ?>"/></td>
</tr>
<tr>
<td>LOGIN NAME:</td><td><input type="text" name="login" id="login" value="<? echo $rows['login']; ?>"/></td>
</tr>
<tr>
<td>EMAIL:</td><td><input type="text" name="mail" id="mail" value="<? echo $rows['email']; ?>"/></td>
</tr>
<tr>
<td>AGE:</td><td><input type="text" name="age" id="age" value="<? echo $rows['age']; ?>"/></td>
</tr>
<tr>
<td>PHONE NO:</td><td><input type="text" name="ph" id="ph" value="<? echo $rows['phone']; ?>"/></td>
</tr>
<tr>
<td>INTERESTS:</td><td><textarea rows="20" name="interests" id="interests" value="<? echo $rows['interests']; ?>"></textarea></td>
</tr>
<tr><td><input type="hidden" name="id" id="id" value="<? echo $rows['id']; ?>"/></td></tr>
<tr><td><input type="submit" value="save changes"/></td></tr>

</table>
</form>
</body>
</html>