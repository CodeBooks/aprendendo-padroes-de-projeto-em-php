<?
//ZambeziCalc.php
class ZambeziCalc extends IHook
{
	protected  function addTax()
	{
		$this->fullCost = $this->purchased + ($this->purchased * .07);
	}
	protected  function addShippingHook()
	{
		if(! $this->hookSpecial)
		{
			$this->fullCost += 12.95;
		}
	}
	protected  function displayCost()
	{
		echo "Your full cost is $$this->fullCost";
	}
}
?>