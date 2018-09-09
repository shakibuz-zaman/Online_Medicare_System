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
				<li><a href="#">Pending Problem</a></li>
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
			//echo $username.'-> '.$deid[$ud].'<br>';  
			
			
		?>
	<?php
	$username=$_SESSION['un'];
	//echo $username.'<br> Hello';
	$que="select uid,serial,prob,solve from user_prob where dept='$deid[$ud]' and solve='0'";
	//echo $que.'<br>';
	$data=mysql_query($que);
	while($row=mysql_fetch_array($data)){
		if(!isset($_POST['sol'])){
		echo '<div class="">';
		//echo '<html><head><style>background : Blue;</style></head></html>';
		//echo $row['prob'].'<br>'.$row['solve'].'<br><br>';
		echo "<font size='5' color='green' face='Arial'>".'#'.$row['prob'].'  '.$row['uid'].'</font><br>';
		//echo $row['serial'].'.'.$row['prob'].'<br>';
		echo "<font size='5' color='indigo' face='Arial'>Solution : </font>";
		/*if($row['solve']=="0"){
			echo "<font size='5' color='red' face='Arial'>"."Sorry Your problem has not yet been consulted by any doctor.We will try to solve it fast.Keep staying us".'</font><br><br>';	
		}
		else
			echo "<font size='5' color='DarkSlateGrey' face='Arial'>".$row['solve'].'</font><br><br>';
		*/
		echo '</div>';
		echo "<form action='pendings.php' method='post'>
			  <p><textarea name='sol' cols='80' rows='5'></textarea></p>
			  <input type='Submit' name='Submit' value='Submit Solution'><br>
		      </form>";
		}
		if(isset($_POST['sol'])){
			//session_start(); 
			$str=$_POST['sol'];
			//echo 'Data has';				//echo $str.'LLLL<br>';
			//$username=$_SESSION['un'];
			//echo 'Data successfully added';
			ensol($str,$row['uid'],$row['prob']);
			$_POST['sol']='0';
			unset($_POST['sol']);


			//echo $username.' '.$cc.'<br>';
		}
		//header('Location:: current_page_url');	
	}


 ?>
  

	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>
