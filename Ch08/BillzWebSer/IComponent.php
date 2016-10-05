<?php
//IComponent.php
//Component interface
abstract class IComponent
{
	protected $site;
	abstract public function getSite();
	abstract public function getPrice();
}
?>
