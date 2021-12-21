<?php 

/**
 * 
 */
class University {
	
	public $direction;

	public function getInfo(){

		return 'Direction is ' . $this->direction . PHP_EOL;
	}

}

class Course extends University{

	public $courseName;

	public function getInfo(){

		return parent::getInfo() . 'Course is ' . $this->courseName . PHP_EOL;
	}
}

$result = new Course();

$result->direction = "Railway automation";
$result->courseName = "Automatics telemechanics and communication";

echo $result->getInfo();