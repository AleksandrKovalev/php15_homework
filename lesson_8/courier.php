<?php
fwrite(STDOUT, "Enter number of room: ");
$number_of_room = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number of floors: ");
$number_of_floors = trim(fgets(STDIN));
fwrite(STDOUT, "Enter the number of apartments per floor: ");
$number_of_rooms_in_floor = trim(fgets(STDIN));

function search($r, $f, $n){
	$num_room = $r;
	$number_room_entrance = $n * $f;//How many rooms in one entrance
	$num_entrence = 1;
	$num_floor = 1;
	while($r > $number_room_entrance){
		$r -= $number_room_entrance;
		$num_entrence++;
	}
	while($r > $n){
		$r -= $n;
		$num_floor++;
    }
    echo "Room # " . $num_room . " located in " . $num_entrence . " entrence on " . $num_floor . " floor.";
}
search($number_of_room, $number_of_floors, $number_of_rooms_in_floor);
?>