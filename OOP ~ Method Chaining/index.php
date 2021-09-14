<?php
	class PHP{
		public function procedural()
		{
		    echo 'This is procedural programming <br/>';
		    return $this;
		}

		public function pdo()
		{
		 	echo 'This is pdo programming <br/>';   
		 	return $this;
		}

		public function oop()
		{
		    echo 'This is object-oriented programming <br/>';
		    return $this;
		}
		public function framework()
		{
		    echo 'This is framework programming <br/>';
		    return $this;
		}
	}
	$obj = new PHP;
	$obj->procedural()->framework()->pdo()->oop();
?>