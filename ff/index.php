<?php  
	include 'core/init.php';
	include 'includes/overall/header.php';
?>
<h1>Home</h1>
<p>Just a template</p>
<?php
	if(isset($_SESSION['uid'])){
		//echo 'logged in<br>';
		header('Location: pro.php');
	}
	else
		echo 'Not logged in<br>';
?>
<?php include 'includes/overall/footer.php';?>