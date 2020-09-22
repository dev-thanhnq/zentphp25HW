<?php
session_start();
$mod = $_GET['mod'];
$act = $_GET['act'];
$c = $_GET['c'];
$params = array();
// $data = $_POST;
// $params[] = $data;
// $params[] = $_FILES;
if (isset($_GET['id'])) {
	$params[] = $_GET['id'];
}

if (!isset($_GET['page'])) {
	$params['page'] = 1;
} else {
	$params[] = $_GET['page'];
}
$class = ucfirst($c) . ucfirst($mod) . 'Controller';
$path = 'controllers/'. $mod . '/' . $class . '.php';

require_once $path;

$controller_obj = new $class();
$data = $_POST;
$params[] = $data;
$params[] = $_FILES;
call_user_func_array([$controller_obj, $act], $params);