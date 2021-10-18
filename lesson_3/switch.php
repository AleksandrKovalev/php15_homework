<?php
$handle = fopen('php://stdin', 'r');
 $line1 = fgets($handle);

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


?>