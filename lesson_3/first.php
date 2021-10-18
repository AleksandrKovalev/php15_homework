<?php
// echo "If you are a man, press 1!\n";
// $handle = fopen('php://stdin', 'r');
// $line1 = fgets($handle);

// echo ($line1 == 1) ? "Man!" : "Girl!!";

// echo "\n";

 echo "Please enter number!!!\n";

 $ent = fopen('php://stdin', 'r');
 $fizz = (int)fgets($ent);
 $buzz = (int)fgets($ent);
 $num = (int)fgets($ent);
 $count = 1;

 echo "\n";

  while ($count <= $num){
    if ((($fizz==1)||($buzz == 1))||(($fizz==0)||($buzz == 0))){
        echo "The remainder of division by 1 is always 0, try again!!!";
        break;
     } elseif ($fizz > $num && $buzz > $num){
            if ($fizz > $num){
                echo "Number $fizz and $buzz is greater than number $num \n";
            } break;
    } elseif (($count % $fizz == 0)&&($count % $buzz == 0)){
        echo "Fizz!!!Buzz!!!\n";
    } elseif ($count % $fizz == 0){
        echo "Fizz!!!\n";
    } elseif ($count % $buzz == 0) {
        echo "Buzz!!!\n";
    } else echo "$count\n";
    $count++;
 }















/*
if(($line1 > 100)&&($line1 < 1000)){
    echo "Thanks, man";
} elseif (($line1>10) && ($line1 < 100)) {
    echo "Ok";
} elseif ($line1 > 1000){
    echo "cool!!!";
} else  echo "WHAT???";

//echo "\n";
//if ($line1 > 1000) echo "cool!!!";

*/
/*
switch ($line1) {
    case 2:
        echo "I am better!";
        break;
    case 3:
        echo "ok";
        break;
    case 4:
        echo "I am good";
        break;
    case 5:
        echo "YeeeWhaaaa!!!!";
        break;
    default:
    echo "it not mark";
}

echo "\n";
*/







/*$line2 = fgets($handle);
$line3 = fgets($handle);

if ($line%2 == 0){
    echo ("Чет");
} else echo("Не чет");
echo max($line1, $line2, $line3);
*/

?>