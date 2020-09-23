<?php
session_start();
$mod = $_GET['mod'];
$act = $_GET['act'];
$c = $_GET['c'];
$params = array();

if ($act == 'index' && $mod == 'client') {
	if (!isset($_GET['page'])) {
	$params['page'] = 1;
	} else {
		$params[] = $_GET['page'];
	}
}

if (isset($_GET['id'])) {
	$params[] = $_GET['id'];
}

if ($_POST!=null) {
	$params[] = $_POST;
}

if ($_FILES!=null) {
	$params[] = $_FILES;
}


$class = ucfirst($c) . ucfirst($mod) . 'Controller';
$path = 'controllers/'. $mod . '/' . $class . '.php';

require_once $path;

$controller_obj = new $class();

call_user_func_array([$controller_obj, $act], $params);