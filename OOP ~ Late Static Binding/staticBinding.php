<?php
	class SonaliBank{
		public static function getClass()
		{
		    return __CLASS__;
		}

		public static function getBank()
		{
			echo '<br/>';
		    //echo self::getClass();  # To resolve it for using static
		    echo static::getClass();
		}
	}

	class PurbaliBank extends SonaliBank{
		public static function getClass()
		{
		    return __CLASS__;
		}
	}

	$bank = new SonaliBank;
	echo $bank->getClass();
	$bank->getBank();
	echo '<hr/>';

	$purbali = new PurbaliBank;
	echo $purbali->getClass();
	$purbali->getBank();