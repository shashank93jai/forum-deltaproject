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
	$id=$_GET['id'];
	$sql=mysql_query("UPDATE threads SET views=views+1 WHERE id=$id");
	$sql="SELECT * FROM threads WHERE id=$id";
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);
?>
</br></br></br></br></br></br></br></br></br>
<table id="tab" border="1" align="center" cellpadding="3" cellspacing="1" >
<tr>
<th align="center">#</th>
<th align="center">Name</th>
<th  align="center">Subject</th>

<th  align="center">Message</th>
<th  align="center">Date time</th>
</tr>
<tr>
<td><? echo $rows['id']; ?></td>
<td><? echo $rows['name']; ?></td>
<td><? echo $rows['subject']; ?></td>
<td><? echo $rows['message']; ?></td>
<td align="center"><? echo $rows['datetime']; ?></td>
</tr>
</table></br>


<?php
	$sql="SELECT * FROM answers WHERE id=$id";

	$result=mysql_query($sql);
?>
<table id="tab" border="1" align="center" cellpadding="3" cellspacing="1" >
<tr>

<th  align="center">Name</th>
<th align="center">Answer</th>
<th  align="center">Date time</th>
<th align="center">likes</th>
<th align="center">dislikes</th>
</tr>

<?php
	while($rows=mysql_fetch_array($result))
	{
?>
	<tr>
	<td><? echo $rows['name']; ?></br><a href="like.php?answerid=<? echo $rows['answerid']; ?>">Like this post</a></br><a href="dislike.php?answerid=<? echo $rows['answerid']; ?>">DisLike this post</a></td>
	
	<td><? echo $rows['answer']; ?></td>
	<td><? echo $rows['datetime']; ?></td>
	<td><? echo $rows['likes']; ?></td>
	<td><? echo $rows['dislikes']; ?></td>
	</tr>


<?php
	}
mysql_close();
?>
</table>
</br>

<p>Create a reply to this thread</p>

<form action=reply.php method="post">
Reply:<textarea name="reply" id="reply" size="1000" rows="5" columns="3"></textarea>
<input name="id" id="id" type="hidden" value="<? echo $id; ?>"/>
<input type="submit" value="submit"/>


</body>
</html>