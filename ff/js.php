<?php  
	if(isset($_POST['editf'])){
		$d=$_POST['editf'];
		echo $d.' <br>';
		$_POST['editf']='';
		unset($_POST['editf']);
	}
	if(isset($_POST['editl'])){
		$d=$_POST['editl'];
		echo $d.' <br>';
		$_POST['editl']='';
		unset($_POST['editl']);
	}
	if(isset($_POST['editm'])){
		$d=$_POST['editm'];
		echo $d.' <br>';
		$_POST['editm']='';
		unset($_POST['editm']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php 
			echo "<form aciton='' method='post'>";
			echo "<div id='fname'><p style='font-size:20'>First Name : ".''."  ";
			echo "<input type='button' onClick='add_fname()' name='fedit' value='Edit'></div>";
		
			echo "<div id='lname'><p style='font-size:20'>Last Name : ".''."  ";
			echo "<input type='button' onClick='add_lname()' name='ledit' value='Edit'></p></div>";
		
			echo "<div id='mail'><p style='font-size:20'>Mail : ".''."  ";
			echo "<input type='button' onClick='add_mail()' name='medit' value='Edit'></p></div>";
			echo "</form>";
		 ?>

		<script>
			var room = 1;
			function add_fname() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editf' value=''><input type='submit' name='submit' value='Submit Edition'>";
	        document.getElementById('fname').appendChild(divtest)
			}
			function add_lname() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editl' value=''><input type='submit' name='submit' value='Submit Edition'>";
	        document.getElementById('lname').appendChild(divtest)
			}
			function add_mail() {
   		    //var objTo = document.getElementById('room_fileds')
    		var divtest = document.createElement("div");
    		divtest.innerHTML = "<input type='txt' name='editm' value=''><input type='submit' name='submit' value='Submit Edition'>";
	        document.getElementById('mail').appendChild(divtest)
			}
		</script>
    
</body>
</html>