
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
		<h1>DANH SÁCH SẢN PHẨM</h1>
		</center>
		<a href="listgh.php" class="btn btn-primary">Xem giỏ hàng</a>
        <?php
            session_start();
        ?>
		<table width="100%">
			<tr>
				<th>ID</th>
				<th>Tên sản phẩm</th>
				<th>Đơn giá</th>
				<th>Hành động</th>
			</tr>
            <?php foreach ($_SESSION['list'] as $key => $value): ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td>
                        <a href="add.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Thêm vào giỏ hàng</a>
                    </td>
                </tr>
            <?php endforeach ?>
		</table>
	</div>
</body>
</html>


