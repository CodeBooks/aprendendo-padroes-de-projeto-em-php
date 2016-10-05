<?php
//Male.php
//Male Concrete Component
class Male extends IComponent
{
	public function __construct()
	{
		$this->date="Male";
		$this->setFeature("<br/>Dude programmer features: ");
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getAge()
	{
		return $this->ageGroup;
	}
	public function setAge($ageNow)
	{
		$this->ageGroup=$ageNow;
	}
	public function getFeature()
	{
		return $this->feature;
	}
	public function setFeature($fea)
	{
		$this->feature=$fea;
	}
}
?>
