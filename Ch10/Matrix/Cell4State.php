<?php
//Cell4State.php
class Cell4State implements IMatrix
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function goLeft()
	{
		//Illegal move
	}
	public function goRight()
	{	
		echo "<img src='cells/five.png'>";
		$this->context->setState($this->context->getCell5State());
	}
	
	public function goUp()
	{
		echo "<img src='cells/one.png'>";
		$this->context->setState($this->context->getCell1State());
				
	}
	public function goDown()
	{
		echo "<img src='cells/seven.png'>";
		$this->context->setState($this->context->getCell7State());
	}
}
?>