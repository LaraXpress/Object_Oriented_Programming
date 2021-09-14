<?php	
	class Student{
		// Private Access Modifier
		private $name;
		private $department;

		public function __construct($name, $department)
		{
		    $this->name       = $name;
		    $this->department = $department;
		}

		public function getInfo()
		{
		    return 'Name : '.$this->name.' and Deparment : '.$this->department;
		}
	}

	class College extends Student{	
		public $session;
		public function __construct($session)
		{
			return $this->session = $session;	    
		}	
	}
	$std = new Student('Mazedur Rahman','Applied Statistics');
	echo $std->getInfo();
	echo $std->name;       // can't not access
	echo $std->department; // can't not access
?>