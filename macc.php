<?php  
	include 'core/init.php';
?>
<!doctype <!DOCTYPE html>
<html>
<head>
	<title>Website title</title>
	<meta charset="UTF-8">
	<link rel = "stylesheet" href="css/screenu.css">
</head>
<body>
	<header>
		<a href="/index.html"><img src="head.jpg" alt="logo" height="100" width="940" /></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="">My Account</a></li>
				<li><a href="submission.php">My Submission</a></li>
				<li><a href="dept_file/u_dept.php">Department</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	<div class="clear"></div>
	</header>
	<div id="container">
	<?php
		$ui=$_SESSION['un'];
		//echo $ui; 
		$qu="select fname,lname,mail from user_info where uname='$ui'";
		$darr=mysql_query($qu);
		$row = mysql_fetch_array($darr);
		//echo $row[2];
		if(isset($_POST['editf'])){
			$d=$_POST['editf'];
			//echo $d.' <br>';
			$qu="update user_info set fname='$d' where uname='$ui'";
			//echo $qu.'<br>';
			mysql_query($qu);
			$_POST['editf']='';
			unset($_POST['editf']);
			echo '<meta http-equiv="refresh" content="0">';
		}
		if(isset($_POST['editl'])){
			$d=$_POST['editl'];
			//echo $d.' <br>';
			$qu="update user_info set lname='$d' where uname='$ui'";
			//echo $qu.'<br>';
			mysql_query($qu);
			$_POST['editl']='';
			unset($_POST['editl']);
			echo '<meta http-equiv="refresh" content="0">';
		}
		if(isset($_POST['editm'])){
			$d=$_POST['editm'];
			//echo $d.' <br>';
			$qu="update user_info set mail='$d' where uname='$ui'";
			//echo $qu.'<br>';
			mysql_query($qu);
			$_POST['editm']='';
			unset($_POST['editm']);
			echo '<meta http-equiv="refresh" content="0">';
		}

		echo "<form aciton='' method='post'>";
		echo "<div id='fname'><p style='font-size:20'>First Name : ".$row[0]."  ";
		echo "<input type='button' onClick='add_fname()' name='fedit' value='Edit'></div>";
		
		echo "<div id='lname'><p style='font-size:20'>Last Name : ".$row[1]."  ";
		echo "<input type='button' onClick='add_lname()' name='ledit' value='Edit'></p></div>";
		
		echo "<div id='mail'><p style='font-size:20'>Mail : ".$row[2]."  ";
		echo "<input type='button' onClick='add_mail()' name='medit' value='Edit'></p></div>";
		echo "</form>";

    ?>
    <script>
			var room = 1;
			function add_fname() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editf' value=''><input type='submit' name='submit' value='Submit Edition'><br><br>";
	        document.getElementById('fname').appendChild(divtest)
			}
			function add_lname() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editl' value=''><input type='submit' name='submit' value='Submit Edition'><br><br>";
	        document.getElementById('lname').appendChild(divtest)
			}
			function add_mail() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editm' value=''><input type='submit' name='submit' value='Submit Edition'><br><br>";
	        document.getElementById('mail').appendChild(divtest)
			}
	</script>

		<h1>#</h1>
	</div>
	<footer>
		&copy: phpacademy.org 2016.All right reserves.
	</footer>
</body>
</html>