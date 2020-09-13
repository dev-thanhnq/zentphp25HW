<?php
include_once 'Connection.php';

class Model
{
    var $conn;
    function __construct()
    {
        $connection = new connection();
        $this->conn = $connection->connect();
    }

    function select($table)
    {
        $query = "SELECT * FROM $table";

        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function insert($table, $data)
    {
        $query = "INSERT INTO $table";

        $string_1 = '';
        $string_2 = '';
        $i = 0;
        foreach ($data as $column => $value) {
            $i++;

            $string_1 .= $column;
            if ($i != count($data)) { //Nếu không phải là cột cuooisc cùng thì thêm dấu ,
                $string_1 .= ', ';
            }

            $string_2 .= "'" . $value . "'";
            if ($i != count($data)) { //Nếu không phải là giá trị cuooisc cùng thì thêm dấu ,
                $string_2 .= ", ";
            }
        }
        $string = ' (' . $string_1 . ')' . ' VALUE ' . '(' . $string_2 . ')';
        $query = $query . $string;

        $status = $this->conn->query($query);
        return $status;
    }

    function delete($table, $id)
    {

        $query = "DELETE FROM $table WHERE id = " . $id;
        $status = $this->conn->query($query);
        return $status;
    }

    function selectEdit($table, $id)
    {

        $query = "SELECT * from $table WHERE id = " . $id;
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function edit($table, $id, $data)
    {
        $query = "UPDATE $table SET ";
        $string = '';
        $i = 0;
        foreach ($data as $column => $value) {
            $i++;
            if ($i > 0) {
                $string .= $column . "='" . $value . "'";
                if ($i != count($data)) {
                    $string .= ", ";
                }
            }
            if ($i == count($data)) {
                $string .= " WHERE id = " . $id;
            }
        }

        $query = $query . $string;
        $status = $this->conn->query($query);

        return $status;
    }

    function showDetail($table, $id)
    {
        $query = "SELECT * FROM $table WHERE id = " . $id;

        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}