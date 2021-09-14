<?php
	class Bank{
		public    $name;
		public    $bank;
		protected $account;
		private   $salary;

		public function __construct($name, $bank,$account,$salary)
		{
		    $this->name    = $name;
		    $this->bank    = $bank;
		    $this->account = $account;
		    $this->salary  = $salary;
		}		
	}
	$sonali = new Bank('John Cena','Sonali Bank',100013454322,125000);
	$data    = serialize($sonali);
	file_put_contents('demo.txt', $data);
	echo '<h2>Serialization</h2>';
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	echo '<hr/>';

	$content          = file_get_contents("demo.txt");
	$unserialize_data = unserialize($content);
	echo '<h2>Un-Serialization</h2>';
	echo '<pre>';
	print_r($unserialize_data);
	echo '</pre>';
?>