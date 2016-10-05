<?php
//ConProFF1.php
include_once('IPrototype.php');
class ConProFF1 extends IPrototype
{
	public function __construct()
	{
		$this->wingColor="blue";
		$this->flying="Banks like an ace.";
		$this->eyesight="20/20";
	}
	function __clone(){}
}
?>