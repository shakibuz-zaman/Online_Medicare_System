<?php  
	include 'core/init.php';
	echo "<!doctype <!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
	
	echo "<title>Website titleeee</title>";
	echo "<meta charset='UTF-8'>";
	echo "<link rel = 'stylesheet' href='css/screenr.css'>";
    echo "</head>";
	echo "<body>";
    include 'includes/header.php';
		echo "<div id='container'>";
	include 'includes/aside.php';

?>
<?php  
	if(empty($_POST)===false){
		$require_f=array('uname','pass','fname','lname','mail');
		//echo '<pre>',print_r($require_f,true),'</pre>';
		foreach ($_POST as $key => $value) {
			if(empty($value)===true){
				$errors[]='Fill up all field';
				//echo $value.' + ';
				break 1;
			}
		}
		if(empty($errors)){
			if(user_exists($_POST["uname"])===true){
				 $errors[]='Sorry the username already exists<br>';
			}
			if(strlen($_POST['pass'])<6){
				$errors[]='Your password must contain more than 6 characters<br>';
			}
			if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)===false){
				$errors[]='A valid email is required<br>';
			}
			if(email_exists($_POST['mail'])===true){
				$errors[]='Email already taken<br>';
			}
		}

	}
	
	//print_r($errors);
?>
<h1>Register</h1>
<?php  
	if(empty($_POST)===false&& empty($errors)===true){
		$regdata=array(
			'fname'	=>$_POST['fname'],
			'lname'	=>$_POST['lname'],
			'mail'	=>$_POST['mail'],
			'uname'	=>$_POST['uname'],
			'pass'	=>$_POST['pass'],
			'admin' =>0,
			'dept'  =>'x'
		);
		registerd($regdata);

	}else{
		//output_errors($errors);
		oerrors($errors);
		//print_r($errors);
	}
?>
<form action="" method="post">
	<ul>
		<li>
			Username* :<br>
			<input type="txt" name="uname">
		</li>
		<li>
			Password* :<br>
			<input type="password" name="pass" size="10"><br>
		</li>
		<li>
			First Name* :<br>
			<input type="txt" name="fname">
		</li>
		<li>
			Last Name* :<br>
			<input type="txt" name="lname">
		</li>
		<li>
			Email* :<br>
			<input type="txt" name="mail">
		</li>
		<li>
			<input type="submit" name="Submit">
		</li>
	</ul>

</form>

<?php include 'includes/overall/footer.php';?>