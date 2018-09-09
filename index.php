<?php  
	include 'core/init.php';
	include 'includes/overall/header.php';
?>
<h1>Home</h1>
<p style="font-size:20">Health care or healthcare is the maintenance or improvement of health via the diagnosis, treatment, and prevention of disease, illness, injury, and other physical and mental impairments in human beings. Health care is delivered by health professionals (providers or practitioners) in allied health professions, chiropractic, physicians, physician associates, dentistry, midwifery, nursing, medicine, optometry, pharmacy, psychology, and other health professions. It includes the work done in providing primary care, secondary care, and tertiary care, as well as in public health</p>
<p style="font-size:20">Here we are to serve all people free medical service</p>
<?php
	if(isset($_SESSION['uid'])){
		//echo 'logged in<br>';
		$c=chkad($_SESSION['uid']);
		//header('Location: pro.php');
		if($c==0){ 
			//echo $c;
			header('Location: pro.php');	
		}
		if($c==1){ 
			//echo $c;
			header('Location: admin/index.php');
	    }
	}
?>
<?php include 'includes/overall/footer.php';?>