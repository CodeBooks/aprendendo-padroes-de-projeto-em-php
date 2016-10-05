<?php
//IComponent.php
//Component interface
abstract class IComponent
{
	protected $date;
	protected $ageGroup;
	protected $feature;
	
	abstract public function getDate();
	abstract public function setAge($ageNow);
	abstract public function getAge();
	abstract public function setFeature($fea);
	abstract public function getFeature();
}
?>
