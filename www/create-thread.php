<?php
	require_once('auth.php');
?>


<html>
<head>
<title>Create a new thread</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php include("menu.htm"); ?></br>
</br></br></br></br>
<form method="post" action="add-thread.php">
<table>

<tr>
<td></td>
<td><strong>Create New Thread</strong> </td>
</tr>
<tr>
<td >Subject:</td>

<td><input name="subject" type="text" id="subject" size="100" /></td>
</tr>
<tr>
<td>Message:</td>
<td><textarea size="500" columns="5" name="message" id="message"></textarea></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>

</form>
</body>
</html>