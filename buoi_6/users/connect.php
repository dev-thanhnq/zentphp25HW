<?php
$severname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_test';
//Tạo kết nối đến CSDL
$conn = new mysqli($severname, $username, $password, $dbname);
if ($conn -> connect_errno) {
    echo 'Failed to connect to MySQL: ' . $conn->connect_error;
    exit();
}
//echo 'thành công!';
//die();
//$query = "SELECT * FROM users WHERE 1";
//echo $query;