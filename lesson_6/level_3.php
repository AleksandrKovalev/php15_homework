<?php
$start = microtime(true);
define("LIMIT",100);
define("SQRT_LIMIT",floor(sqrt(LIMIT)));
 
function sieveEratosthenes(){
    $sieve = array_fill(2,LIMIT-1,true);
    for($i=2;$i<=SQRT_LIMIT;$i++){
        if($sieve[$i]===true){
            for($j=$i*$i; $j<=LIMIT; $j+=$i){
                $sieve[$j]=false;
                }
            }
        }
    foreach ($sieve as $key => $value) {
        	if ($value == true){
        		echo $key . "\n";
        	}
        }    
    }
   
    sieveEratosthenes();
    echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
?>