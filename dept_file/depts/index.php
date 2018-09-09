<?php  
	include '../../core/init.php';
	//include 'includes/overall/header.php';

?>

<!doctype <!DOCTYPE html>
<html>
<head>
	<title>Website title</title>
	<meta charset="UTF-8">
	<link rel = "stylesheet" href="../screenu.css">

</head>
<body>
	<header>
		<a href="/index.html"><img src="head.jpg" alt="logo" height="100" width="940" /></a>
		<nav>
			<ul>
				<li><a href="../../index.php">Home</a></li>
				<li><a href="../../macc.php">My Account</a></li>
				<li><a href="../../submission.php">My Submission</a></li>
				<li><a href="../u_dept.php">Department</a></li>
				<li><a href="../../logout.php">Log Out</a></li>
				<li><a href="LiCo.php">Live Consultant</a></li>
			</ul>
		</nav>
	
	<div class="clear"></div>
	</header>
	<div id="container">

		<?php  
			if(isset($_POST['dept'])){
				$d=$_POST['dept'];
				$_SESSION['DEP']=$d;

				//seesion_start();
				
			}
			$sd=$_SESSION['DEP'];
			
			//$_POST = array();
			//print_r($d);
		?>

		<form action="" method="post">
			<h1>Submit a problem : <h1>
			<style>
				input[type="text"] {
   				    width: 200px;
				}
			</style>
			<!--<input type="txt" name="prob"  size="70" maxlength="1500" style="width: 1500px height: 150px" class="resizedTextbox"> <br> -->
			<p><textarea name="prob" cols="80" rows="10"></textarea></p>			
			<input type="Submit" name="Submit"><br>
		</form>
		<?php 
		    $sd=$_SESSION['DEP'];
		    // $sd= dept code
			//echo $sd.'LLLL<br>';  
			if(isset($_POST['prob'])){
				//session_start(); 
				$str=$_POST['prob'];
				//echo $sd.'LLLL<br>';
				$username=$_SESSION['un'];
				endata($str,$username,$sd);

				//echo $username.' '.$cc.'<br>';
			}
			
		?>
		<H1 style="font-size:40;background:indigo;">Departmental healthh news</H1><br>
		<?php  
		$qt="select image,heading,post from blog where deid=1";
	    $dat=mysql_query($qt);
		while($rw=mysql_fetch_array($dat)){
			echo "<div class='' style='background-color:#7D1935;'>";
			echo "<h1 style='background-color: powderblue;font-size:35'>".$rw['heading']."<h1>";
			echo "<p style='text-align:center;'><img src='../../".$rw['image']."' alt='Mountain View' style='width:600px;height:300px;'></p><br>";
			echo "<font size='5' color='black' face='Arial'>".$rw['post'].'</font><br>';
			
			echo '</div>';
	}			
		?>
      

	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>
