<?php 

class University {
	
	public $direction;

	public function getInfo(){
		return 'Direction is ' . $this->direction . PHP_EOL;
	}
}

class Course extends University{

	protected $courseName;

	public function setCourseName($name){
		return $this->courseName = $name;
	}

	public function getCourseName(){
		return $this->courseName;
	}

	public function getInfo(){
		return parent::getInfo() . 'Course is ' . $this->getCourseName() . PHP_EOL;
	}
}

class Group extends Course{

	private $numberGroup;

	public function setNumberGroup($num){
			return $this->numberGroup = $num;
	}

	public function getNumberGroup(){
		return $this->numberGroup;
	}

	public function getInfo(){
		return parent::getInfo() . $this->getNumberGroup();
	}
}

$obj = new Group;

$obj->direction = "Railway automation";
$obj->setCourseName("Automatics telemechanics and communication");
$obj->setNumberGroup("AT - 03");

echo $obj->getInfo();