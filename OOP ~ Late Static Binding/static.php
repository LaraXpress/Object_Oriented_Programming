<?php
	// Static Properties and Methods
	class Student{
		static $name   = 'Mustafizur Rahman ';
		static $email  = 'mustafiz@bdrb.org';		

		public static function getInfo()
		{
			return self::$name.' and '.self::$email;
		}
	}
	$student = new Student;
	echo Student::getInfo();
	echo '<br/>';
	echo Student::$name;
	echo Student::$email;
	
?>
