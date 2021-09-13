<?php
	class Student{
		static $name     = 'Hasinur Rahman';
		const profession = 'Software Engineer';

		public function getName()
		{
		    return 'Full Name is : '.self::$name;
		}
	}
	$student = new Student;
	echo Student::getName();
?>