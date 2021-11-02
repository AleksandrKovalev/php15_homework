<?php

$array = [231, 4, 1, 18, 95, 4, 25, 30, 8, 331, 5, 74, 5, 1, 12, 3];


function largestNum($arr){	
	$max = NULL;
		foreach ($arr as $value) {
			if($value >= $max){
				$max = $value;	
			}
		}
		return $max;
}

$a = largestNum($array);
echo $a;
?>