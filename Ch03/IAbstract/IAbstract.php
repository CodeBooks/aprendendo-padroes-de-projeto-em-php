<?php
abstract class IAbstract
{
	//Property available to all implementations
	protected $valueNow;
	
	/*All implementations must include following 2 methods: */
	//Must return decimal value
	abstract protected function giveCost();
	//Must return string value
	abstract protected function giveCity();
	
	//This concrete function is available to all
	//class implementations without overriding
	//the contents
	
	public function displayShow()
	{
		$stringCost =$this->giveCost();
		$stringCost = (string)$stringCost;
		$allTogether=("Cost: $" . $stringCost . " for " . $this->giveCity());
		return $allTogether;
	}
}

?>