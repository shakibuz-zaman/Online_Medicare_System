<?php  
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/lr/core/init.php";
    include_once($path);
	include 'header.php';
?>
<h1>Profile</h1>
<html>
<form action="depts/index.php" method="post">
<input type="checkbox" name="dept" value="1">ENT<br><br>
<input type="checkbox" name="dept" value="2">Surgery<br><br>
<input type="checkbox" name="dept" value="3">Respiradory<br><br>
<input type="checkbox" name="dept" value="4">Child Specialist<br><br>
<input type="submit" name="Submit">
</html>

</div>
	<?php include 'footer.php';  ?>
</body>
</html>