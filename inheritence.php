<?php
	class Department{
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
	/*
	Base Class : Department
	$dept = new Department('BBA','MAT101','2002-03');
	echo $dept->getInfo();
	*/
	// Sub-Class : Student
	$std = new Student('BBA','MAT101','2002-03');
	echo $std->getInfo();
	echo '<br/>Student Name : '.$std->getName('Mizanur Rahman');

?>