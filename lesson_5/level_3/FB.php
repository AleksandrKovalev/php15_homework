<?php

function makeVarArr($source)
{
    list($fizz, $buzz, $num) = array_map('intval', explode(' ', $source));
    return [$fizz, $buzz, $num];
}

function fizzBuzz($fb_source)
{
    $str = '';
    list($fizz, $buzz, $num) = $fb_source;
    for ($i = 1; $i <= $num; $i++) {
        if (($i % $fizz == 0)&&($i % $buzz == 0)){
            $str .= "Fizz!!!Buzz!!!\n";
        } elseif ($i % $fizz == 0){
            $str .= "Fizz!!!\n";
        } elseif ($i % $buzz == 0) {
            $str .= "Buzz!!!\n";
        } else $str .= "$i\n";
    }
    return rtrim($str) . PHP_EOL;
}


$file = file('D:\a-level_homework\lesson_5\level_3\fizzBuzz.txt');
$arr = array_map('makeVarArr', $file);

 $results = array_map('fizzBuzz', $arr);
 //var_dump($arr);
 array_map('var_dump', $results);

?>