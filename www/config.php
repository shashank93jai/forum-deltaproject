<?php
$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

	if (!mysql_select_db('project'))
	{
    		echo("creating database!\n");
    		mysql_query('CREATE DATABASE project');
    
	}


	mysql_select_db("project", $con);
?>