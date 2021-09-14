<?php
	
	trait PHP
	{
		public function code()
		{
		    echo 'I love coding in PHP<br/>';
		    return $this;
		}

		public function framework($value)
		{
			global $name;
		    echo '<br/>'. $this->name = $value;		    
		}
	}
	trait SQL
	{
		public function database()
		{
		    echo 'I love to do SQL Programming';
		    return $this;
		}
	}

	
	class Programmar{
		use PHP,SQL;
	}

	class DBA extends Programmar{
		use SQL;

		private function oracle()
		{
		    echo '<br/>I love to work with Oracle PL-SQL Programming';
		    return $this;
		}

		public function getOracle()
		{
			$this->oracle();
		    return true;
		}
	}

	$coder = new Programmar;
	$coder->code()->database()->framework('laravel');
	echo '<br/>';

	$sql = new DBA;
	$sql->database()->getOracle();
	