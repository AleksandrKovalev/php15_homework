<?php
$num = $_POST['num'];


function diamond($num){
	$x = $num;
	$y = $num;
	echo ("<div align = 'center'>");
	while($x--){		
		if ($num%2 != 0 && $x%2 == 0) {
			 echo str_repeat(' ',intval($x/2)) . str_repeat('*', $num-$x) . "<br>";
		}
	}
	while($y--){
		if ($num%2 != 0 && $y%2 != 0) {
			echo str_repeat(' ',intval(($num - $y)/2)) . str_repeat('*', $y) . "<br>";
		}
	}
	echo ("</div>");
}
diamond($num);

?>