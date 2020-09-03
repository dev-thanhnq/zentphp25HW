<?php
include '../helpers/sql.php';
$data = $_POST;
insert('posts', $data); //Hàm insert trong sql.php
header('Location:posts.php');