<?php
$start = microtime(true);
define("PRIME_NUM", 100);
define("NUMS_MAX", 1000);
$primes = [];
 
for($current_num = 1; $current_num <= NUMS_MAX; $current_num++){
	$prime = true;
	for($divider = 2; $divider < $current_num; $divider++){
		if($current_num % $divider == 0){
			$prime = false;
		}
	}
	if ($prime == true){
		 array_push($primes, $current_num);
	}
}

$select = array_slice($primes, 1, PRIME_NUM);
$get_sum = array_sum($select);
//var_dump($select);
echo 'Сумма первых ' . PRIME_NUM . ' простых чисел = ' . $get_sum . "\n";
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
?>