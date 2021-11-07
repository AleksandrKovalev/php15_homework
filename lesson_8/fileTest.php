<?php

function fileRead ($arg){
	$source = fopen($arg, 'r');
	$file = file($arg);
	fclose($source);
	return $file;	
}

function fileStringCheck ($arg){
	foreach ($arg as $key => $value) {
		$numbersArr = explode(';', $value);  //split the array into two parts
		$numbersStr = $numbersArr[0];
		$numForSum = explode(" ", $numbersStr);
		$sum = array_sum($numForSum); //the sum of the values of the first part of the array
		$countNum = count($numForSum); //Numbers of value (divide)
		$resultTaskStr = $numbersArr[1]; //Initial result from task
		$resultArr = explode(" ", $resultTaskStr);
		$divide = $resultArr[0];
		$remainderTask = $resultArr[1];
		$actualResult = $sum % $countNum;
		$a = intdiv($sum, $countNum);

		$numStr = $key + 1;

		 if($actualResult == $remainderTask){
		 	echo "String #" . $numStr . " - " . trim($value) . " is TRUE" . PHP_EOL;
		 }else echo "String #" . $numStr . " - " . trim($value) . " is FALSE" . PHP_EOL;

	}
}

$file = 'nums.txt';
$arr = fileRead($file);
fileStringCheck ($arr);

?>