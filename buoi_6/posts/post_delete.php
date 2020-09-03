<?php
include_once '../helpers/sql.php';
$id = $_GET['id'];
//echo $id;
delete('posts', $id); //Hàm delete của sql.php
header('Location:posts.php');