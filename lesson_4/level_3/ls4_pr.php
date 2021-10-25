<?php

function readFileSource(string $fileName)
{
    $source = fopen($fileName, 'r');
    $file = file($fileName);
    fclose($source);
    return $file;
}

function dataProcessing(){

    $fileSourceData = readFileSource('D:\a-level_homework\lesson_4\level_3\FizzBuzzRead.txt');
    foreach ($fileSourceData as $value) {

        $oneString = explode(" ", $value);

        $num1 = trim($oneString[0]);
        $num2 = trim($oneString[1]);
        $num3 = trim($oneString[2]);

        fizzBuzz('D:\a-level_homework\lesson_4\level_3\FizzBuzzWrite.txt', $num1, $num2, $num3);
    }
    echo 'done!';
}

function fizzBuzz($fileName, $num1, $num2, $num3){
    $fizz = (int)$num1;
    $buzz = (int)$num2;
    $num = (int)$num3;
    $count = 1;

    $handle = fopen($fileName, 'a');
    fwrite($handle,'FizzBuzz for - ' . $num1 . ', ' . $num2 . ', ' . $num3 . ' is - ');
    while ($count <= $num){
        if (($count % $fizz == 0)&&($count % $buzz == 0)){
            fwrite($handle,"FizzBuzz!!!");
        } elseif ($count % $fizz == 0){
            fwrite($handle,"Fizz!!!");
        } elseif ($count % $buzz == 0) {
            fwrite($handle, "Buzz!!!");
        } else fwrite($handle,"$count");
        $count++;
    }
    fwrite($handle, PHP_EOL);
    fclose($handle);

}

dataProcessing();