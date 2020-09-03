<?php
include 'connect.php';
function select($table) {
    $query = "SELECT * FROM $table";
    $conn = connect();
//echo $query;

    $result = $conn->query($query);
//Tạo mangt chứa dữ liệu
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
//echo '<pre>';
//var_dump($users);
//echo '</pre>';

}

function insert($table, $data) {
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
//    echo $query;
//    $query = "INSERT INTO categories (name, thumbnail, slug, description) VALUE ('" . $data['name'] . "', '" . $data['thumbnail'] . "', '". $data['slug']. "', '". $data['description']. "')";
    $conn = connect();
    $status = $conn->query($query);
    return $status;
}

function delete($table, $id) {
    $conn = connect();
    $query = "DELETE FROM $table WHERE id = ". $id;
//    echo $query;
    $status = $conn->query($query);
}

function select_edit($table, $id) {
    $conn = connect();
    $query = "SELECT * from $table WHERE id = ". $id;
    $result = $conn->query($query);
//    $user = $result->fetch_assoc();
    return $result->fetch_assoc();
}

function edit($table, $data) {
    $conn = connect();
    $query = "UPDATE $table SET ";
    $string = '';
    $i = 0;
    foreach ($data as $column => $value) {
        $i++;
        if ($i>1) {
            $string .= $column . "='" . $value . "'";
            if ($i != count($data)) {
                $string .= ", ";
            }
        }
        if ($i == count($data)) {
            $string .= " WHERE id = " . $data['id'];
        }
    }
    $query = $query . $string;
//    echo $query;
//    $query = "UPDATE users SET name='". $data['name']. "', email='". $data['email']. "', password='". $data['password']. "', avatar='". $data['avatar']. "' WHERE  id = ". $id;
    $status = $conn->query($query);
//    return $status;
}

function showDetail($table, $id) {
    $query = "SELECT * FROM $table WHERE id = ". $id;
    $conn = connect();
    $result = $conn->query($query);
    return $result->fetch_assoc();

}
