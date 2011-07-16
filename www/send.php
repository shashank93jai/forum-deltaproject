<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="header">MY WEBSITE</div></br>
<?php include("menu.htm"); ?></br></br></br></br>
<?php
	

	session_start();
	include("config.php");

	$title=$_POST['message_title'];
	$to=$_POST['message_to'];
	$content=$_POST['message_content'];
	$from=$_SESSION['SESS_FIRST_NAME'];
	
	$datetime=date("y/m/d H:i:s"); 	
	
	$sql= "SELECT login FROM members WHERE login = '".$to."'";
	$result=mysql_query($sql);
        
        if( mysql_num_rows($result) == 0 )
	{
		die("The user you are trying to contact don't exist.try again");
 	}
     	else
	{
		mysql_query("INSERT INTO sentmsgs (from_user, to_user, message_title, message_contents, datetime) VALUES ('$from','$to','$title','$content','$datetime')") OR die("Could not send the message: <br>".mysql_error());
		mysql_query("INSERT INTO recdmsgs (from_user, to_user, message_title, message_contents, datetime) VALUES ('$from','$to','$title','$content','$datetime')") OR die("Could not send the message: <br>".mysql_error());
		echo "The Message Was Successfully Sent!";
	}


?>
</form>
</body>
</html>