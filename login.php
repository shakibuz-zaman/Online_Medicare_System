<?php  
	include 'core/init.php';
	
	if(empty($_POST)===false){

		$username=$_POST['username'];
		$password=$_POST['password'];
		$_SESSION['un']=$username;
		//$tmp=$_SESSION['un'];
		//echo $tmp.'<br>';
		if(empty($username)===true||empty($password)===true){
			$errors[]='You need to enter a username and password';
		}
		else if(user_exists($username)===false){
			$errors[]='We can\'t find the username';
		}
		else{
			if(strlen($password)>12){
				$errors[]='Password too long';
			}

			$login=login($username,$password);
			if($login===false)
				$errors[]= "Username/Password combination doesn't  match";
			else{
				//redirect main page
				//die($login);
				$_SESSION['uid']=$login;
				$c=chkad($username);
				//echo $c;
				if($c==0){ 
					//echo $c;
					header('Location: pro.php');	
				}
				if($c==1){ 
					//echo $c;
					header('Location: admin/index.php');
	    		}
				//header('Location: pro.php');
				exit();
				echo 'ok';
			}
		}
		//print_r($errors);
	}
	else{
		$errors[]='No data received';
	}
	include 'includes/overall/header.php';
	echo output_errors($errors);
	include 'includes/overall/footer.php';
?>