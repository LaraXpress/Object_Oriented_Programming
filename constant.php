<?php
	class Student{
		static $name     = 'Hasinur Rahman';
		public $email    = 'hasin@isrt.ac.bd';
		const profession = 'Software Engineer';

		public function getName()
		{
		    return 'Full Name is : '.self::$name;
		}
	}
	$student = new Student;
	echo Student::getName();
	echo '<br/>';
	echo $student->email;
	echo '<br/>';
	echo Student::profession;
?>