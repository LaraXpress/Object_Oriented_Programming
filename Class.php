<?php
    // Class Defined ..	
	class Car{
		private $name;
		private $brand;
		private $model;
		private $speed;

		public function __construct($name,$brand,$model)
		{
		    $this->name  = $name;
		    $this->brand = $brand;
		    $this->model = $model;
		}

		public function getCarDetails()
		{
		    return "Car Type : {$this->name} <br/> Car Brand : {$this->brand} <br/> Car Model : {$this->model} <hr/>";
		}
		
		public function getSpeed($speed)
		{
		    return $this->speed = $speed;
		}
	}
	// Object Initialize
	$toyota  = new Car('Private Car','Toyota', 'ToyotaM250');
	$pajero  = new Car('Sports Car','Pajero', 'PajerX300');
	$ferarri = new Car('Office','Ferrari', 'FerrariX231');
	echo $toyota->getCarDetails();
	echo $pajero->getCarDetails();
	echo $ferarri->getCarDetails();
?>
