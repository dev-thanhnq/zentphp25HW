<?php 
	session_start();
	foreach ($_SESSION['info'] as $key => $value) {
		if ($_GET['id'] == $key) {
			unset($_SESSION['info'][$key]);
			// echo "yes";
		}	
	}
	// echo "<pre>";
	// print_r($_SESSION['info']);
	// echo "</pre>";
	header('Location:list.php');
 ?>