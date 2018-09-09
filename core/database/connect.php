<?php  
	$errot='Sorry there is an error connecting to database';
	mysql_connect('localhost','root','ttt') or die($error);
	mysql_select_db('project') or die($error);
?>