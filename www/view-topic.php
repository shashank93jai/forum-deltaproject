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
<td colspan="2" bgcolor="gray"><pre><? echo $rows['subject']; ?>  <? echo $rows['datetime']; ?></td>
</tr>
<tr>
<td width="200"><? echo $rows['name']; ?></td>
<td><? echo $rows['message']; ?></td>

</tr>
</table></br></br>


<?php
	$sql="SELECT * FROM answers WHERE id=$id";

	$result=mysql_query($sql);
?>
<h>Answers:</h>

<?php
	while($rows=mysql_fetch_array($result))
	{
?>	<table id="tab" border="1" align="center" cellpadding="3" cellspacing="1" >
	<tr>
	<td colspan="2" bgcolor="gray"><pre><? echo $rows['datetime']; ?>   <? echo $rows['likes']; ?> Likes   <? echo $rows['dislikes']; ?> Dislikes</pre></td>
	</tr>
	
	<tr>
	<td width="200"><pre><? echo $rows['name']; ?></br><a href="like.php?answerid=<? echo $rows['answerid']; ?>&qid=<?echo $rows['id']; ?>"><img src="images/like.jpg" alt="like" width="70"/></a>  <a href="dislike.php?answerid=<? echo $rows['answerid']; ?>&qid=<?echo $rows['id']; ?>"><img src="images/dislike.jpg" width="90" height="30"/></a></pre></td>
	<td><? echo $rows['answer']; ?></td>
	</tr>
	</table>
	</br>

<?php
	}
mysql_close();
?>

</br>

<p>Create a reply to this thread</p>

<form action=reply.php method="post">
Reply:<textarea name="reply" id="reply" size="1000" rows="5" columns="3"></textarea>
<input name="id" id="id" type="hidden" value="<? echo $id; ?>"/>
<input type="submit" value="submit"/>


</body>
</html>