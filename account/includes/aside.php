<aside>
	<?php 
		if(log_in()===true)
			echo 'Logged in<br>';
		else
			include 'includes/widgets/login.php'; 
	?>
</aside>