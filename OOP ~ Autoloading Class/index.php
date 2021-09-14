<?php
	// Before Autoload Register
	include './classes/python.php';
	include './classes/java.php';
	include './classes/javascript.php';


	// After Autoload Register, remove includes all functions
	spl_autoload_register(function($class_name){
		include "classes/".$class_name.".php";
	});

	$python = new Python;
	$java   = new Java;
	$js     = new JavaScript;