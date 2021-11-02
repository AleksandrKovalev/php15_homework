<?php
$str = ["Строки можно определять как одинарными, так и двойными кавычками",
		" Строки в одинарных кавычках считаются немного более быстрыми в работе",
		" Строки же в двойных кавычках позволяют выводить некоторые", 
		"escape-последовательности и значения переменных, что уже упоминалось в первом уроке" ];

function numLetters($strings){

	$arr_rand = array_rand($strings);
	$arr_str = [$strings[$arr_rand]];
	foreach($arr_str as $val){
		$arr = explode(' ', $val);
		foreach ($arr as $value) {
			$length = iconv_strlen($value);
			$l += $length;
		}
	
	}
	echo "In string - " . $strings[$arr_rand] . " is - " . $l . " symbols.";
}

numLetters($str);


