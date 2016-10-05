<?php
include_once('IAbstract.php');

class NorthRegion extends IAbstract
{
	//Must return decimal value
	protected function giveCost()
	{
		return 210.54;
	}
	//Must return string value
	protected function giveCity()
	{
		return "Moose Breath";
	}
}

?>