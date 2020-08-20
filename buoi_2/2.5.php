<?php 
	$str = "Nguyễn Quang Minh Huyền Thành";
	$data = explode(" ", $str);
	echo "Họ: " . $data[0] . "<br>";
	echo "Đệm: ";
	for ($i=1; $i < count($data) - 1; $i++) { 
		echo $data[$i] . " ";
	}
	echo "<br>" . "Tên: " . $data[count($data) - 1];
 ?>