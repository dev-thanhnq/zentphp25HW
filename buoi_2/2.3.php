<?php 
	$arr = ['1', '2', '9' , '5', '7', '6', '11'];
	echo "Mảng ban đầu: ";
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i] . " ";
	}
	$palace = $arr[0];
    for ($i = 0 ; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $palace = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $palace;
            }
        }
    }
    echo "<br>" . "Mảng sắp xếp theo thứ tự tăng dần: ";
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i] . " ";
	}
 ?>