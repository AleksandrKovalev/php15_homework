<?php
$names = [
 'Olivia', 'Liam',
'Emma' , 'Noah',
'Amelia', 'Oliver',
'Ava' , 'Elijah',
'Sophia' , 'Lucas',
'Charlotte' , 'Mason',
'Isabella', 'Levi',
'Scarlett' , 'Sebastian',
'Sofia', 'Carter',
'Nova' , 'Daniel',
'Aurora', 'Alexander',
'Chloe' , 'William',
'Nora' , 'Ezra'];

function maxLengthStrFromArray (array $array){
	$lengthStr = array_map('strlen' , $array);
	$comb = array_combine($array, $lengthStr);
	$m = max($comb);
	$key = array_search($m, $comb);

	return 'The most longest string is ' . $key . ' its length ' . $m;
}    
	
echo maxLengthStrFromArray($names);


?>