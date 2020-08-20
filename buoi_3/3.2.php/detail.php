<?php 
	session_start();
	// $code = $_GET['code'];
	foreach ($_SESSION['info'] as $key => $value) {
		if ($_GET['id'] == $key) {
			echo "Mã sinh viên: " . $value['code'] . '<br>';
			echo "Họ tên: " . $value['name'] . '<br>';
			echo "Số điện thoại: " . $value['phone'] . '<br>';
			echo "Email: " . $value['email'] . '<br>';
			echo "Giới tính: " . $value['sex'] . '<br>';
			echo "Địa chỉ: " . $value['address'] . '<br>';
		}
	}
	
 ?>