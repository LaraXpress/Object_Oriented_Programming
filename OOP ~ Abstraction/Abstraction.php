<?php
	
	abstract class School{
		public $name;
		public $course;
		public $grade;

		public function __construct($name,$course,$grade)
		{
		    $this->name   = $name;
		    $this->course = $course;
		    $this->grade  = $grade;
		}

		public function getInfo()
		{
		    return "NAME : {$this->name} <br/> COURSE : {$this->course} <br/> GRADE : {$this->grade} <hr/>";
		}

		abstract public function payment();
	}
	class Department extends School{

		public function getDetails()
		{
		    return parent::getInfo();
		}

		public function payment()
		{
			return 'Bikash Payment has been done!';
		}
	}
	$student = new Department('DRMC','Science','A+');
	echo $student->getDetails();
	echo $student->getInfo();
	echo $student->payment();
?>