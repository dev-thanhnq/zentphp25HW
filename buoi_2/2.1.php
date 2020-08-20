<?php 
	$arr = ['1', '2', '9' , '5', '7', '6'];
	$x = 0;
	for ($i=0; $i < count($arr); $i++) { 
		if ($x < $arr[$i]) {
			$x = $arr[$i];
		}
	}
	echo "Phần tử lớn nhất của mảng = " . $x;
 ?>