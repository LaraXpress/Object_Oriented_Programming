<?php
    // final : restrict to inheritence into anywhere subclasses
	final class Department{
		public $name;
		public $course;
		public $session;

		public function __construct($name, $course, $session)
		{
		    $this->name    = $name;
		    $this->course  = $course;
		    $this->session = $session;		    
		}

		public function getInfo()
		{
		    return "Department Name : {$this->name} <br/> Department Course : {$this->course} <br/> Deparment Session : {$this->session}";
		}
	}

	class Student extends Department{
		public $student_name;
		public function getName($name)
		{
		     return $this->student_name = $name;
		}
	}
	$std = new Student('BBA','MAT101','2002-03'); // not allowed to do so due to final keyword
	echo $std->getInfo(); // not allowed to do so due to final keyword
	echo '<br/>Student Name : '.$std->getName('Mizanur Rahman');
?>
