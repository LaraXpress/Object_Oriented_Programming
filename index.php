<?php

class Student{
	public $name;	

	public function getInfo($name)
	{
	    return $this->name = $name;	    
	}
}
$student = new Student;
echo $student->getInfo('Mazedur Rahman');