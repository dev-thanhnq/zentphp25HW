<?php 
	$arr = ['1', '2', '10' , '5', '7', '6'];
	echo "Mảng đầu vào: ";
	foreach ($arr as $key => $value) {
		echo $value . " ";
	}
	$size = count($arr) - 1;
	echo "<br>" . "Mảng đầu ra : ";
	for ($i=$size; $i >= 0; $i--) { 
		echo $arr[$i] . " ";
	}
 ?>