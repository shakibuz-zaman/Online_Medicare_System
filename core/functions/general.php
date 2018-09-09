<?php  
	function sanitize($data){
		return mysql_real_escape_string($data);
	}
	function output_errors($errors){
		$output=array();
		foreach($errors as $error){
			$output[]='<li>' . $error . '</li>';
		}
		return '<ul>' . implode('', $output). '</ul>';
	}
	function oerrors($errors){
		echo '<ul>';
		foreach($errors as $e){
			echo '<li>'.$e.'</li>';
		}
		echo '</ul>';
		//return '<ul><li>'.implode('</li><li>',$errors).'</li></ul>';
	}
?>