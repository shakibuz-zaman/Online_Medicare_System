<?php  
	include 'core/init.php';
	include 'includes/overall/header.php';
?>
<h1>Register</h1>
<form action="" method="post">
	<ul>
		<li>
			Username* :<br>
			<input type="txt" name="uname">
		</li>
		<li>
			Password* :<br>
			<input type="password" name="pass">
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
	</ul>

</form>

<?php include 'includes/overall/footer.php';?>