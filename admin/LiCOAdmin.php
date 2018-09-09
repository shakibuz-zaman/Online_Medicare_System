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
				<li><a href="../admin/index.php">Home</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="../../submission.php">My Submission</a></li>
				<li><a href="../u_dept.php">Department</a></li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	
	<div class="clear"></div>
	</header>
	<div id="container">

	<?php  
		//echo $_SESSION['un'];
	?>
	<h1><b><i>Unread Message<i></b></h1>

	<?php 
		$lastu=array();
		$visit=array();
		$in=0;
		$docid=$_SESSION['un'];
		$qu="select uid,serial,userm,docm from chat where did='$docid' and docm='0'";
		//echo $qu;
		$dd=mysql_query($qu);
		//echo $dd.'++';
		while($ro=mysql_fetch_array($dd)){
			//echo '++';
			$visit[$ro['uid']]=0;
		}
		$dd=mysql_query($qu);
		//echo $dd;
		$lastm=array();
		while($roo=mysql_fetch_array($dd)){
			//echo '++';
			if($visit[$roo['uid']]!=1){
				$lastu[$in++]=$roo['uid'];
				//echo $lastu[$in-1].' ';
				$visit[$roo['uid']]=1;
			}
			$lastm[$roo['uid']]=$roo['userm'];

		}
		for($i=0;$i<$in;$i++){
			//echo $lastu[$i].' : '.$lastm[$lastu[$i]].'<br>';
		}
	?>
	<?php 
		$d=0;
		if(isset($_SESSION[ 'chatt' ])){
			$d=1;
			$qu="select userm,docm from chat where did='".$_SESSION['un']."' and uid='".$_SESSION['chatt']."'";
			//echo $qu.'<br>';
			$res=mysql_query($qu); 
			while($row=mysql_fetch_array($res)){
				echo "<font size='3' color='green' face='Arial'>".$_SESSION['chatt'].' :: '.$row['userm'].'<br></font>';
				if($row['docm']!="0")
					echo "<font size='3' color='red' face='Arial'>".$_SESSION['un'].' :: '.$row['docm'].'<br></font>';
				//echo '<br>';
			}

			echo "<form action='' method='post'>";
			echo "<p><textarea name='msgg' cols='80' rows='10'></textarea></p>";			
			echo "<input type='submit' name='submit' value='Send Message'> <input type='submit' name='scon' value='Stop Conversation'><br>";
			echo "</form>";
			$cc=0;

			if(isset($_POST['msgg']) && !isset($_POST['scon']) ){
				$st="select count('uid') from chat where did='".$_SESSION['chatt']."' and uid='".$_SESSION['un']."'";

				$ins="update chat set docm='".$_POST['msgg']."' where userm='".$lastm[ $_SESSION['chatt'] ]."'";
				//echo $ins.'<br>';	
				mysql_query($ins);
				echo '<meta http-equiv="refresh" content="0">';
				//echo $ins.'<br>';					
			}
			if(isset($_POST['scon'])){
				unset($_SESSION['chatt']);
				unset($_POST['scon']);
				echo '<meta http-equiv="refresh" content="0">';
			}

			//echo "Session opened<br>";
			//unset($_SESSION[ 'chatt' ]);
			//echo '<meta http-equiv="refresh" content="0">';
		}
		else{
			for($i=0;$i<$in;$i++){
				if(isset( $_POST[ $lastu[$i] ]) ){
					unset( $_POST[ $lastu[$i] ]);
					$_SESSION['chatt']=$lastu[$i];
					break;
				}
				else{
					$qq="select count('uid') from chat where uid='$lastu[$i]' and did='".$_SESSION['un']."'";
					//echo $qq;
					$dd=mysql_query($qq);
					$roo=mysql_fetch_row($dd);
					//echo $roo[0];
					$qqq="select docm from chat where serial=$roo[0]";
					$ddd=mysql_query($qqq);
					$rooo=mysql_fetch_row($ddd);
					//echo $rooo[0].'++';
					if($rooo[0]=='0'){
						echo "<form action='' method='post'>";
						echo "<p style='font-size: 20'>From ".$lastu[$i]." ## ".$lastm[$lastu[$i]].'<br>';
						echo "<input type='submit' name='".$lastu[$i]."' value='Reply'><br></p>";
						echo "</form>";
				    }
			   }
				/*if(isset( $_POST[ 'd' ]) ){
					unset($_POST[ $lastu[$i] ]);
					$_SESSION['chatt']=$lastu[$i];
					break;
				}*/
			}
			//echo 'Hello<br>';
			if(isset($_SESSION[ 'chatt' ]) && $d==0){
				echo '<meta http-equiv="refresh" content="0">';
			}
	    }
    ?>

      

	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>
