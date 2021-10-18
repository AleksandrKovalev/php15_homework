<?php

echo "Please enter number of month!!!\n";

$handle = fopen ('php://stdin' , 'r');
$month = fgets($handle);

if (($month <= 2 || $month == 12) && $month != 0){
	echo "It is winter!!!";
}elseif ($month > 2 && $month < 6) {
	echo "It is spring!!!";
}elseif ($month >= 6 && $month < 9) {
	echo "It is summer!!!";
}elseif ($month >= 9 && $month < 12) {
	echo "It is autunum!!!";
}else echo "Incorrect number of month!!! Try again!"; 


?>