<?php 
	session_start();
	$user = array(
		'code' => $_POST['user'],
		'name' => $_POST['name'],
		'phone' => $_POST['phone'],
		'email' => $_POST['email'],
		'sex' => $_POST['sex'],
		'address' => $_POST['address']
	);
	$_SESSION['info'][] = $user;
	header('Location:list.php');
 ?>