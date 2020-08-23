
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <center>
        <h1>Document</h1>
    </center>
    <a href="upload.php" class="btn btn-primary">Upload</a>
    <?php
    session_start();
    $i = 0;
    ?>
    <table width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Download</th>
            <th>#</th>
        </tr>
        <?php foreach ($_SESSION['document'] as $key => $value): ?>
        <?php $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td>
                    <a href="" class="btn btn-info">Download</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $value['name']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>




