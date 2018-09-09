<?php  
	include 'core/init.php';
	include 'account/includes/overall/header.php';
?>

<h1>Home</h1>
<?php
	$username=$_SESSION['un'];
	echo $username.'<br>';
 ?>
<p>Just a template</p>
<?php
	if(isset($_SESSION['uid'])){
		echo 'logged in<br>';
		//echo $_POST['uid'].'<br>';
	}
	else
		echo 'Not logged in<br>';
?>
<?php include 'includes/overall/footer.php';?>