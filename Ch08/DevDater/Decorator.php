<?php
//Decorator.php
//Decorator participant
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

abstract class Decorator extends IComponent
{
	public function getDate()
	{
		if($this->date !=null)
		{
			$this->date->getDate();
		}
	}
	public function setAge($ageNow)
	{
		$this->ageGroup=$this->ageGroup;
	}
	public function getAge()
	{
		return $this->ageGroup;
	}
}

?>