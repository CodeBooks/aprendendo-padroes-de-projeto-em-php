<?php
include_once('IAbstract.php');

class WestRegion extends IAbstract
{
	//Must return decimal value
	protected function giveCost()
	{
		$solarSavings=2;
		$this->valueNow=210.54/$solarSavings;
		return $this->valueNow;
	}
	//Must return string value
	protected function giveCity()
	{
		return "Rattlesnake Gulch";
	}
}

?>