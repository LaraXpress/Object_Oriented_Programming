<?php
	class Calculation{
		public $a;		

		public function getValue(array $x)
		{
		    foreach($x as $key => $value){
		    	echo $value[0].'<br/>';
		    	echo $value[1] * $value[2].'<br/>';
		    }
		}

		public function setValue(Language $lang)
		{
		    return $lang->getVersion('7.0');
		}
	}

	class Language{
		public $name;
		public $version;

		public function getFramework($name)
		{
		    return $this->name = $name;
		}

		public function getVersion($version)
		{
			return $this->version = $version;	
		}
	}
	$numbers = [
		['number One',100,200,300],
		['number Two',300,400,600]
	];

	$value = new Calculation;
	$lang  = new Language;
	
	echo $value->getValue($numbers);
	echo '<br/>';
	echo $value->setValue($lang);
    echo $value->setValue(new Language);
?>