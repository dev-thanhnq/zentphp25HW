<?php
$a = 1;
$b = -2;
$c = 1;
if ($a == 0) {
 	echo "a phải khác 0!";
} else {
 	$delta = $b * $b - 4 * ($a * $c);
 	if ($delta > 0) {
 		echo "Phương trình có 2 nghiệm: " . "<br>";
 		echo "x1 = " . (-$b + sqrt($delta)) / (2 * $a) . '<br>';
 		echo "x2 = " . (-$b - sqrt($delta)) / (2 * $a) . '<br>';
 	} elseif ($delta == 0) {
 		echo "Phương trình có nghiệm kép: " . '<br>';
 		echo "x1 = x2 = " . (-$b / (2 * $a));
 	} elseif ($delta < 0) {
 		echo "Phương trình vô nghiệm!";
 	}
}
?>