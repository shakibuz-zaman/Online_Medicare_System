<?php  
	session_start();
	
	require 'database/connect.php';// or die($error);
	require 'functions/general.php';
	require 'functions/users.php';//or die($error);

	$errors=array();
?>