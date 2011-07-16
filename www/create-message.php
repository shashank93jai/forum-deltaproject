<html>
<?php require_once("auth.php"); ?>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Create message</title>
<script type="text/javascript">
function vname()
{
	
	var x=document.getElementById("message_to").value;

	if (x==null || x=="")
  	{
  		alert("Name must be filled out");
  		return false;
  	}
}
function vtitle()
{
	
	var x=document.getElementById("message_title").value;

	if (x==null || x=="")
  	{
  		alert("Message Title must be filled out");
  		return false;
  	}
}

function valid()
{ 
	var a=vname();
	var b=vtitle();
	if(a==false || b==false)
		return false;
}
</script>
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php 
	include("menu.htm"); 
?>
</br></br></br></br></br>
<form onsubmit="return valid()" action="send.php" method="post">
<table>
<tr>
<td>TO:</td><td><input type="text" name="message_to" id="message_to"/></td>
</tr>
<tr>
<td>MESSAGE SUBJECT:</td><td><input type="text" name="message_title" id="message_title" /></td>
</tr>
<td>MESSAGE CONTENT:</td><td><textarea name="message_content" rows="20" columns="50"></textarea></td>
</tr>
<tr>
<td></td><td><input type="submit" value="send message"/></td>
</tr>
</table>
</form>
</body>

