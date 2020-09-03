<?php
include_once '../helpers/sql.php';
$data = $_POST;
edit('posts', $data);
//echo '<pre>';
//print_r($data);
//echo '</pre>';
header('Location:posts.php');