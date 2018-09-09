<?php  
	include 'core/init.php';
	include 'account/includes/overall/header.php';
?>

<h1>HealthCare for all</h1>
<img src="image/home.jpg" alt="Mountain View" style="width:900px;height:400px;">
<h1>Why Online HealthCare is important?</h1>
<p style="font-size:20">As Technology is rising day-by-day It is possible.......access to health care varies across countries, groups, and individuals, largely influenced by social and economic conditions as well as the health policies in place. Countries and jurisdictions have different policies and plans in relation to the personal and population-based health care goals within their societies. Health care systems are organizations established to meet the health needs of target populations. Their exact configuration varies between national and subnational entities. </p>
<?php
	$username=$_SESSION['un'];
	//echo $username.'<br>';
	$dd=isadmin($username);
	//echo $dd.'<br>';
 ?>
<?php
	if(isset($_SESSION['uid'])){
		//echo 'logged in<br>';
		//echo $_POST['uid'].'<br>';
	}
?>
<?php include 'includes/overall/footer.php';?>