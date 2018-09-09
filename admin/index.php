<?php  
	include '../core/init.php';
	//include 'includes/overall/header.php';

?>

<!doctype <!DOCTYPE html>
<html>
<head>
	<title>Website title</title>
	<meta charset="UTF-8">
	<link rel = "stylesheet" href="screenu.css">
</head>
<body>
	<header>
		<a href="/index.html"><img src="image/head.jpg" alt="logo" height="100" width="940" /></a>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="../macc.php">My Account</a></li>
				<li><a href="pendings.php">Pending Problem</a></li>
				<li><a href="../logout.php">Log Out</a></li>
				<li><a href="LiCo.php">Live Consultant</a></li>
			</ul>
		</nav>
	
	<div class="clear"></div>
	</header>
	<div id="container">

		<?php
			$deid=array("ENT"=>1,"Surgery"=>2,"Respiradory"=>3,"Child Specialist"=>4);
		    $username=$_SESSION['un'];
			
		    $ud=getdept($username);
			//echo $username.' '.$ud.'<br>';  
			
			
		?>
		<img src="../image/home.jpg" alt="Mountain View" style="width:900px;height:400px;">
        <h1>Why Online HealthCare is important?</h1>
        <p style="font-size:20">As Technology is rising day-by-day It is possible.......access to health care varies across countries, groups, and individuals, largely influenced by social and economic conditions as well as the health policies in place. Countries and jurisdictions have different policies and plans in relation to the personal and population-based health care goals within their societies. Health care systems are organizations established to meet the health needs of target populations. Their exact configuration varies between national and subnational entities. </p>
        <?php 
        	$ut="update donline set ostat=1 where did='".$_SESSION['un']."'";
			echo $ut;
		   	mysql_query($ut);

         ?>
  

	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>
