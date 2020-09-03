<?php
// Lấy dữ liệu từ form gửi lên, gán vào biến data

include 'connect.php';
$conn = connect();
$data = $_POST;
$id = $data['id'];

$query = "UPDATE users SET name='". $data['name']. "', email='". $data['email']. "', password='". $data['password']. "', avatar='". $data['avatar']. "' WHERE  id = ". $id;

//echo $query;

$status = $conn->query($query);
if ($status) {
    header('Location:users.php');
} else {
    echo 'Update Failed!';
}