<?php

function fileRead ($arg){
	$source = fopen($arg, 'r');
	$file = file($arg);
	fclose($source);
	return $file;	
}

function fileWrite ($arg1 ,array $arg2){
	$handle = fopen($arg1, 'c');
	for ($i = 0; $i < count($arg2); $i++){
		if($i % 2 == 0){
			fwrite($handle, $arg2[$i]);
		}
	}
	fclose($handle);
}

function averageLengthString ($path, array$file){
	$targ = fopen($path, 'c');
	$num = count($file);
	$lengthString = array_map('strlen', $file);
	$sumLengthStr = array_sum($lengthString);
	$average = $sumLengthStr/$num;
	for ($i = 0; $i < $num; $i++) {
		if($lengthString[$i] > $average){
			fwrite($targ, $file[$i]);
		}
	}

}




$path1 = 'Test_open.txt';
$path2 = 'Test_wr.txt';
$path3 = 'Test_wr2wr.txt';

$fileSource = fileRead($path1);
fileWrite($path2 , $fileSource);

$read = fileRead($path2);
averageLengthString($path3, $read);
?>