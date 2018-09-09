<head>
<style>
div {
    color:#fff;
    font-size:40px;
    margin: 5px;
} 
</style>
</head>

<?php  
	include 'core/init.php';
	include 'account/includes/overall/header.php';
?>

<h1>Home</h1>
<?php
	$username=$_SESSION['un'];
	echo $username.'<br>';
	$que="select serial,prob,solve from user_prob where uid='$username'";
	$data=mysql_query($que);
	while($row=mysql_fetch_array($data)){
		echo '<div class="">';
		//echo $row['prob'].'<br>'.$row['solve'].'<br><br>';
		echo "<font size='5' color='green' face='Arial'>".$row['serial'].'.'.$row['prob'].'</font><br>';
		//echo $row['serial'].'.'.$row['prob'].'<br>';
		echo "<font size='5' color='indigo' face='Arial'>Solution : </font>";
		if($row['solve']=="0"){
			echo "<font size='5' color='red' face='Arial'>"."Sorry Your problem has not yet been consulted by any doctor.We will try to solve it fast.Keep staying us".'</font><br><br>';	
		}
		else
			echo "<font size='5' color='DarkSlateGrey' face='Arial'>".$row['solve'].'</font><br><br>';
		echo '</div>';
	}


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