<?php
//Cell6State.php
class Cell6State implements IMatrix
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function goLeft()
	{
		echo "<img src='cells/five.png'>";
		$this->context->setState($this->context->getCell5State());
	}
	public function goRight()
	{	
		//Illegal move
	}
	
	public function goUp()
	{
		echo "<img src='cells/three.png'>";
		$this->context->setState($this->context->getCell3State());
				
	}
	public function goDown()
	{
		echo "<img src='cells/nine.png'>";
		$this->context->setState($this->context->getCell9State());
	}
}
?>