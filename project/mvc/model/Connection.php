<?php


class Connection
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct()
    {
        $this->severname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'db_test';
    }

    public function connect() {
//Tạo kết nối đến CSDL
        $conn = new mysqli($this->severname, $this->username, $this->password, $this->dbname);
        if ($conn -> connect_errno) {
            echo 'Failed to connect to MySQL: ' . $conn->connect_error;
            exit();
        }
        return $conn;
    }
}