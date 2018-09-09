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
				<li><a href="#">My Account</a></li>
				<li><a href="../../submission.php">My Submission</a></li>
				<li><a href="../u_dept.php">Department</a></li>
				<li><a href="../../logout.php">Log Out</a></li>
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
			$dmap=array(1=>"ENT",2=>"Surgery",3=>"Respiradory",4=>"Child Specialist");
			//echo $sd.' Dept no.<br>';  
			
			//$_POST = array();
			//print_r($d);
		?>
		<h1><b><i>Active Doctors...<i></b></h1>
		<?php 
			$que="select did,name from donline where dept='$dmap[$sd]' and ostat=1";
			//echo $que.'<br>';
			$data=mysql_query($que);
			$d=0;
			if(isset($_SESSION['chat'])){
				$d=1;
				//echo $_SESSION['un'].'  '.$_SESSION['chat'].'<br>';
				$qu="select userm,docm from chat where did='".$_SESSION['chat']."' and uid='".$_SESSION['un']."'";
				//echo $qu.'<br>';
				$res=mysql_query($qu); 
				while($row=mysql_fetch_array($res)){
					echo "<font size='3' color='green' face='Arial'>".$_SESSION['un'].' :: '.$row['userm'].'<br></font>';
					if($row['docm']!='0')
						echo "<font size='3' color='red' face='Arial'>"."Doc".' :: '.$row['docm'].'<br></font>';
					//echo '<br>';
				}

				echo "<form action='' method='post'>";
				echo "<p><textarea name='msgg' cols='80' rows='10'></textarea></p>";			
				echo "<input type='submit' name='submit' value='Send Message'> <input type='submit' name='scon' value='Stop Conversation'><br>";
				echo "</form>";
				$cc=0;
				
				if(isset($_POST['msgg']) && !isset($_POST['scon']) ){
					$st="select count('uid') from chat where did='".$_SESSION['chat']."' and uid='".$_SESSION['un']."'";
					//echo 'df';
					$co=mysql_query($st);

					$ro = mysql_fetch_row($co);
					$cc=$ro[0]+1;
					//echo $cc.'<br>';
					//$ins="insert into "
					$ins="insert into chat (uid,did,serial,userm,docm) values('".$_SESSION['un']."','".$_SESSION['chat']."',$cc,'".$_POST['msgg']."','0')";
					
					mysql_query($ins);
					echo '<meta http-equiv="refresh" content="0">';
					//echo $ins.'<br>';					
				}
				//echo $cc.'--<br>';
				if(isset($_POST['scon'])){
					unset($_SESSION['chat']);
					unset($_POST['scon']);
					echo '<meta http-equiv="refresh" content="0">';
				}
				
			}
			else{
				while($row=mysql_fetch_array($data)){
					if ( isset( $_POST[$row['did']] ) ) { 
						echo $row['did'].'<br>';
						unset($_POST[$row['did']]);
						$_SESSION['chat']=$row['did'];
						break;
					}
					else{


						echo '<div class="doc">';
		    			echo "<p style='font-size:20'>". $row['name']."  ".$dmap[$sd]."<p>";
		    			echo "<form action='' method='post'>";
		    			$str="<input type='submit' name='".$row['did']."' value='Start Conversession'>";
		    			echo $str;
		    			//echo "<input type='submit' name='sub' value='Start Conversession'>";
		    			echo "</form>";
		    			echo '</div>';}
			}
		}
			if(isset($_SESSION['chat']) && $d==0){
				echo '<meta http-equiv="refresh" content="0">';
			}
			

		 ?>

      

	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>
