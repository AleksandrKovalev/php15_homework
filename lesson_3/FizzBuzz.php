<?php
 echo "Please enter number!!!\n";

 $ent = fopen('php://stdin', 'r');
 $fizz = (int)fgets($ent);
 $buzz = (int)fgets($ent);
 $num = (int)fgets($ent);
 $count = 1;

 echo "\n";

  while ($count <= $num){
    if ((($fizz==1)||($buzz == 1))||(($fizz==0)||($buzz == 0))){
        echo "You enter 1 or 0!!! \n The remainder of division by 1 is always 0!!! \n Division by zero is forbidden!!! \n Try again!!!";
        break;
    } elseif ($fizz > $num && $buzz > $num){
        echo "Number $fizz and $buzz is greater than number $num \n";
        break;
    } elseif (($count % $fizz == 0)&&($count % $buzz == 0)){
        echo "Fizz!!!Buzz!!!\n";
    } elseif ($count % $fizz == 0){
        echo "Fizz!!!\n";
    } elseif ($count % $buzz == 0) {
        echo "Buzz!!!\n";
    } else echo "$count\n";
    $count++;
 }

?>