<?php
//IPrototype.php
abstract class IPrototype
{
	public $wingColor;
	public $flying;
	public $eyesight;

	abstract function __clone();
}
?>