<?php
 include 'core/init.php';
?>
<?php  
	//session_start();
	$ut="update donline set ostat=0 where did='".$_SESSION['un']."'";
    //echo $ut;
    mysql_query($ut);
	session_destroy();
    header('Location: index.php');
?>