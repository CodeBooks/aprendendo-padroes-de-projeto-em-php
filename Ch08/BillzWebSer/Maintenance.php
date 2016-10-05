<?php
//Maintenance.php
//Concrete decorator
class Maintenance extends Decorator 
{
	public function __construct(IComponent $siteNow) 
	{
		$this->site = $siteNow;
	}
	public function getSite() 
	{
		$fmat="<br/>&nbsp;&nbsp; Maintenance ";
		return $this->site->getSite() . $fmat;
	}
	public function getPrice() 
	{
		return 950 + $this->site->getPrice();
	}
}
?>