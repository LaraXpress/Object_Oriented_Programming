<?php

interface school{
	public function school();
}

interface college{
	public function college();	
}

interface university{
	public function university();
}

interface payment{
	public function fees();	
	public function deposit();	
	public function withdraw();	
}

class Teacher implements school, college, university{
	public function __construct()
	{
	    $this->school();
	    $this->college();
	    $this->university();
	}

	public function school()
	{
		echo 'I am a School Teacher <br/>';
	}

	public function college()
	{
		echo 'I am a College Teacher <br/>';
	}

	public function university()
	{	
		echo 'I am a university Teacher <hr/>';
	}
}

class Student implements school, college, university{
	public function __construct()
	{
	    $this->school();
	    $this->college();
	    $this->university();
	}

	public function school()
	{
		echo 'I am a School Student <br/>';
	}

	public function college()
	{
		echo 'I am a College Student <br/>';
	}

	public function university()
	{	
		echo 'I am a university Student <hr/>';
	}
}

class Stuff implements school, college, university{
	public function __construct()
	{
	    $this->school();
	    $this->college();
	    $this->university();
	}

	public function school()
	{
		echo 'I am a School Stuff <br/>';
	}

	public function college()
	{
		echo 'I am a College Stuff <br/>';
	}

	public function university()
	{	
		echo 'I am a university Stuff <hr/>';
	}
}

class Admin implements payment{
	public $fees;
	public $deposit;
	public $withdraw;

	public function __construct($fees, $deposit, $withdraw)
	{	
	    $this->fees     = $fees;
	    $this->deposit  = $deposit;
	    $this->withdraw = $withdraw;
	    $this->fees();
	    $this->deposit();
	    $this->withdraw();
	    
	}

	public function fees(){
		echo  "Admission fee :{$this->fees} TK <br/>";
	}	
	public function deposit(){
		echo  "Deposit fee :{$this->deposit} TK <br/>";
	}
	public function withdraw(){
		echo  "Withdraw fee :{$this->withdraw} TK <hr/>";
	}
}

$teacher = new Teacher;
$student = new Student;
$stuff   = new Stuff;
$admin   = new Admin(25000,3500,45000);

?>