<?php

echo "Please enter number!!!\n";

$ent = fopen('php://stdin', 'r');
$number = (int)fgets($ent);

if ($number % 2 != 0 && $number > 1) {
    diamond($number);
} else echo 'Wrong!!! The number must be odd!!!';

function diamond($num){
	$up = $num;
	$down = $num;
	while($up--){
		if ($num%2 != 0 && $up%2 == 0) {
			echo str_repeat(' ',intval($up/2)) . str_repeat('*', $num-$up) . "\n";
		}
	}
	while($down--){
		if ($num%2 != 0 && $down%2 != 0) {
			echo str_repeat(' ',intval(($num - $down)/2)) . str_repeat('*', $down) . "\n";
		}
	}
}
?>