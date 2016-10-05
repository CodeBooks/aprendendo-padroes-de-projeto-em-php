<?
//IHook.php
abstract class IHook
{
	protected $purchased;
	protected $hookSpecial;
	protected $shippingHook;
	protected $fullCost;
	
	public function templateMethod($total,$special)
	{
		$this->purchased=$total;
		$this->hookSpecial=$special;
		$this->addTax();
		$this->addShippingHook();
		$this->displayCost();	
	}

	protected abstract function addTax();
	protected abstract function addShippingHook();
	protected abstract function displayCost();
}
?>