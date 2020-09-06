<?php
include_once 'Connection.php';
class model
{
    var $conn;

    function __construct()
    {
        $connection = new connection();
        $this->conn = $connection->connect();
    }

    function select($table) {
        $query = "SELECT * FROM $table";

        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;

    }

    function showDetail($table, $id) {
        $query = "SELECT * FROM $table WHERE id = " . $id;
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}