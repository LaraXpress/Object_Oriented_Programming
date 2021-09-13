<?php	
	// Polymorphism Workflow
	class Factory{
		public $name;
		public $brand;
		public $model;		

		public function __construct($name,$brand,$model)
		{
		    $this->name  = $name;
		    $this->brand = $brand;
		    $this->model = $model;
		}
		// Base Function
		public function getDetails()
		{
		    return "Car Type : {$this->name} <br/> Car Brand : {$this->brand} <br/> Car Model : {$this->model} <hr/>";
		}		
	}

	class Toyota extends Factory{		
		public $speed = '250 Miles / Hours';		
		// Overiding Base Function
		public function getDetails()
		{
		     return "Car Type : {$this->name} <br/> Car Brand : {$this->brand} <br/> Car Speed : {$this->speed} <hr/>";
		}
	}

	class BMW extends Factory{		
		public $speed = '450 Miles / Hours';		

		public function getDetails()
		{
		     return "Car Type : {$this->name} <br/> Car Brand : {$this->brand} <br/> Car Speed : {$this->speed} <hr/>";
		}
	}

	class Audi extends Factory{		
		public $speed = '500 Miles / Hours';		

		public function getDetails()
		{
		     return "Car Type : {$this->name} <br/> Car Brand : {$this->brand} <br/> Car Speed : {$this->speed} <hr/>";
		}
	}

	$toyota = new Toyota('Toyota', 'Toyota-M250',null);
	$bmw    = new BMW('BMW',       'BMW-XD250',  null);
	$audi   = new Audi('Audi',     'Audi-FM250', null);
	echo $toyota->getDetails();
	echo $bmw->getDetails();
	echo $audi->getDetails();	
?>
