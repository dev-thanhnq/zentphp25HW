<?php
//Thông số kết nối CSDL
$severname = 'localhost';

$username = 'root';

$password = '';

$dbname = 'db_test';

//tạo kết nối đến CSDL
$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn -> connect_errno) {
    echo 'Failed to connect to MySQL: ' . $conn->connect_error;
    exit();
}
$data = $_POST;

//Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO categories (name, thumbnail, slug, description) VALUE ('" . $data['name'] . "', '" . $data['thumbnail'] . "', '". $data['slug']. "', '". $data['description']. "')";
$status = $conn->query($query);
header('Location:categories.php');
//echo $query;
