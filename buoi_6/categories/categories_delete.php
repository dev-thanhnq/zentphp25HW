<?php
include 'connect.php';
$conn = connect();
$id = $_GET['id'];

$query = "DELETE FROM posts WHERE posts.id = ". $id;

$status = $conn->query($query);
if ($status) {
    header('Location:posts.php');
} else {
    echo 'Delete failed!';
}