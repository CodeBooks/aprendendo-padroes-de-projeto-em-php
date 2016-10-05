<?php
//Cell5State.php
class Cell5State implements IMatrix
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function goLeft()
	{
		echo "<img src='cells/four.png'>";
		$this->context->setState($this->context->getCell4State());
	}
	public function goRight()
	{	
		echo "<img src='cells/six.png'>";
		$this->context->setState($this->context->getCell6State());
	}
	
	public function goUp()
	{
		echo "<img src='cells/two.png'>";
		$this->context->setState($this->context->getCell2State());
				
	}
	public function goDown()
	{
		echo "<img src='cells/eight.png'>";
		$this->context->setState($this->context->getCell8State());
	}
}
?>