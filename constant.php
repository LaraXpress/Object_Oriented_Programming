<?php
	class Student{
		// Define Constant
		const NAME = 'Mizanur Rahman';

		public function getName()
		{
		    return 'Full Name is : '.Student::NAME;
		}
	}
	$student = new Student;
	echo $student->getName();
?>