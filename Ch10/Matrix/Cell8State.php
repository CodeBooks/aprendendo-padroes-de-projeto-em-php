<?php
//Cell81State.php
class Cell8State implements IMatrix
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function goLeft()
	{
		echo "<img src='cells/seven.png'>";
		$this->context->setState($this->context->getCell7State());
	}
	public function goRight()
	{	
		echo "<img src='cells/nine.png'>";
		$this->context->setState($this->context->getCell9State());
	}
	
	public function goUp()
	{
		echo "<img src='cells/five.png'>";
		$this->context->setState($this->context->getCell5State());
				
	}
	public function goDown()
	{
		//Illegal move
	}
}
?>