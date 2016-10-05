<?php
//IPrototype.php
abstract class IPrototype
{
	public $eyeColor;
	public $wingBeat;
	public $unitEyes;
	
	abstract function __clone();
}
?>