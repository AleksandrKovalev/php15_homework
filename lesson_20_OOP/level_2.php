<?php 

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

class Group extends Course{

	public $numberGroup;

	public function getInfo(){

		return parent::getInfo() . 'Number group is ' . $this->numberGroup;
	}
}



$result = new Group();

$result->direction = "Railway automation";
$result->courseName = "Automatics telemechanics and communication";
$result->numberGroup = "AT - 03";

echo $result->getInfo();