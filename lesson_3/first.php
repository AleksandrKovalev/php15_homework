<?php
 echo "If you are a man, press 1!\n";
 $handle = fopen('php://stdin', 'r');
 $line1 = fgets($handle);

 echo ($line1 == 1) ? "Man!" : "Girl!!";

 echo "\n";

?>