<?php 
$sum = 0;
$n = 2;
$factorial = 1;
for ($i=1; $i <= $n; $i++) { 
	$factorial *= $i;
	$sum += ($i / $factorial);  
}
echo "S = $sum";
 ?>