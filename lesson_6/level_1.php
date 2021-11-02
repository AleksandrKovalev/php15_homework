<?php
define("DIVISOR_NUM", 5);

$j = 0;
for($i = 1; $i <= 100; $i++){
	
	if($i % DIVISOR_NUM == 0){
		$j++;
	}
}
echo $j;
?>