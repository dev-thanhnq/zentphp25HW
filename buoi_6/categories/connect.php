<?php
//Thông số kết nối CSDL
function connect() {
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
    return $conn;
}