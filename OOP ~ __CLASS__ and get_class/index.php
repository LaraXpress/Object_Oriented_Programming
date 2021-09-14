<?php
	abstract class BangladeshBank{
		public function getClass()
		{
		    echo "This is the head office for all banks -> ".__CLASS__;
		    echo '<br/>';
		}

		public function getBranch()
		{
		 	echo "This is the branch office for all banks -> ".get_class($this);   
		 	echo '<hr/>';
		}
	}

	class SonaliBank extends BangladeshBank{
		protected $name;

		public function BranchLocation($name)
		{
			return 'Branch Location :'. $this->name = $name;
		    
		}

		public function getSonali()
		{
		    echo "This is the head office for Sonali Bank ->".__CLASS__;
		    echo '<br/>';
		}

		public function getSonaliBranch()
		{
		 	echo "This is the branch office for Sonali Banks->".get_class($this);
		 	echo '<br/>';   
		}

		public function rootBank()
		{
		    parent::getClass();
		}
	}

	$bank = new SonaliBank;
	$bank->getClass();
	$bank->getBranch();

	$bank->getSonali();
	$bank->getSonaliBranch();
	echo $bank->BranchLocation('Dhanmondi');
	echo '<hr/>';
	$bank->rootBank();