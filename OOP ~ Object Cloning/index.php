<?php
    // Base Class
	class Bank{
		private $name;
		private $account;
		
		public function setBank($name)
		{
		    return $this->name = $name;
		}

		public function setAccount($number)
		{
		    return $this->account = $number;
		}

		public function getBank()
		{
			echo $this->name;    
		}		

		public function getAccount()
		{
			echo $this->account;    
		}
	}
	// Base Class Object
	$sonali = new Bank;
	$sonali->setBank('Sonali Bank : ');
	$sonali->setAccount(10001231409);
	echo $sonali->getBank();
	echo $sonali->getAccount();
	echo '<hr/>';

	$agroni = clone $sonali; // Clone from Base Class
	$agroni->setBank('Agroni Bank : ');
	$agroni->setAccount(10001232404);
	echo $agroni->getBank();
	echo $agroni->getAccount();
	echo '<hr/>';

	$purbali = clone $sonali; // Clone from Base Class
	$purbali->setBank('Purbali Bank : ');
	$purbali->setAccount(10004292404);
	echo $purbali->getBank();
	echo $purbali->getAccount();
	echo '<hr/>';

	$janata = clone $sonali; // Clone from Base Class
	$janata->setBank('Janata Bank : ');
	$janata->setAccount(10008282404);
	echo $janata->getBank();
	echo $janata->getAccount();
	echo '<hr/>';
?>