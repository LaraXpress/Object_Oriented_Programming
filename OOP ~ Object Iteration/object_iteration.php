<?php
	
	class Student{
		public $name;
		public $course;
		public $session;
		public $branch;

		private $income = 12000;		

		public function __construct($name,$course,$session,$branch)
		{
		    $this->name   = $name;
		    $this->course = $course;
		    $this->session= $session;
		    $this->branch = $branch;
		}

		public function getDetails()
		{
		    return $this->income;
		}

		public function getSalary()
		{
		    foreach ($this as $key => $value) {
		        echo '<pre>';
			    echo "$key => $value";
			    echo '</pre>';
		    }

		}
	}

	$std = new Student('Mazedur','MBA','2002-03','Gulshan');
	echo '<b>Object iteration only public access</b>';
	foreach ($std as $key => $value) {
	    echo '<pre>';
	    echo "$key => $value";
	    echo '</pre>';
	}
	echo '<hr/>';
	echo '<b>Object iteration with all activities i.e. private as well as protected members</b>';
	$std->getSalary();