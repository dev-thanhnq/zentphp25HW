<?php
//Thông số kết nối CSDL
include '../helpers/sql.php';
$categories = select('categories');
//$conn = connect();
////echo 'thành công!';
////
////die();
//
////Câu lệnh tru vấn
//$query = 'SELECT * FROM categories WHERE 1';
////$user_pwd = 1;
////$query = "UPDATE `users` SET `id`= '1234' WHERE users.id = " .  $user_pwd;
//
////echo $query;
////die();
//// Thực thi câu lệnh
//$result = $conn->query($query);
//
////tạo 1 mảng để chứa dữ liệu
//$categories = array();
//while ($row = $result->fetch_assoc()) {
//    $categories[] = $row;
//}
//echo '<pre>';
//var_dump($categories);
//echo '</pre>';
//die();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="categories_add.php" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Thumbnail</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Action</th>
        </thead>

        <?php foreach ($categories as $key => $category) {?>
            <tr>
                <td><?php echo $category['id']?></td>
                <td><?php echo $category['name']?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?php echo $category['slug']?></td>
                <td><?php echo $category['description']?></td>
                <td><?php echo $category['created_at']?></td>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="edit.php?id=<?php echo $category['id']?>" class="btn btn-success">Edit</a>
                    <a href="categories_delete.php?id=<?php echo $category['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
