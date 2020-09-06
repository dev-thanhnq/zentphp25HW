<?php
//Thông số kết nối CSDL
include '../helpers/sql.php';
$data = $_POST;
insert('posts', $data);
//Viết câu lệnh để thêm dữ liệu
//$query = "INSERT INTO posts (name, thumbnail, slug, description) VALUE ('" . $data['name'] . "', '" . $data['thumbnail'] . "', '". $data['slug']. "', '". $data['description']. "')";
//$status = $conn->query($query);
header('Location:posts.php');
//echo $query;
