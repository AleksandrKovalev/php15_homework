<?php

$handle = fopen('php://stdin', 'r');
$line1 = fgets($handle);

if(($line1 > 100)&&($line1 < 1000)){
    echo "Thanks, man";
} elseif (($line1>10) && ($line1 < 100)) {
    echo "Ok";
} elseif ($line1 > 1000){
    echo "cool!!!";
} else  echo "WHAT???";

echo "\n";
if ($line1 > 1000) echo "cool!!!";


?>