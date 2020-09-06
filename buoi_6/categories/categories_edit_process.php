<?php
// Lấy dữ liệu từ form gửi lên, gán vào biến data

include 'connect.php';
$conn = connect();
$data = $_POST;
$id = $data['id'];

$query = "UPDATE posts SET name='". $data['name']. "', thumbnail='". $data['thumbnail']. "', slug='". $data['slug']. "', description='". $data['description']. "' WHERE  id = ". $id;

//echo $query;

$status = $conn->query($query);
if ($status) {
    header('Location:posts.php');
} else {
    echo 'Update Failed!';
}