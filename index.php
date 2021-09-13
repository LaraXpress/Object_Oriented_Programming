<?php

class Student{
	public $name;	
	public $email;
	public $password;

	public function __construct($name, $email, $password){
		$this->name     = $name;
		$this->email    = $email;
		$this->password = $password;
	}	
}
	$student = new Student('Maruf Hossain', 'maruf@icddrb.org','admin1234');
	echo 'Name : '.$student->name;
	echo '<br/>';
	echo 'Email : '.$student->email;
	echo '<br/>';
	echo 'Password : '.$student->password;

