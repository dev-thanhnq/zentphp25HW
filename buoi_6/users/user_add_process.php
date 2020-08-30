<?php
include 'connect.php';
$data = $_POST;
//Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO users (name, email, password, avatar) VALUE ('" . $data['name'] . "', '" . $data['email'] . "', '". $data['password']. "', '". $data['avatar']. "')";
$status = $conn->query($query);
header('Location:users.php');
//echo $query;
