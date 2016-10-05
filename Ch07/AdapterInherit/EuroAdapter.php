<?php
include_once('EuroCalc.php');
include_once('ITarget.php');
//Adapter
class EuroAdapter extends EuroCalc implements ITarget
{
	public function __construct()
	{
		$this->requester();
	}
	
	function requester()
	{
		$this->rate=.8111;
		return $this->rate;
	}
}
?>