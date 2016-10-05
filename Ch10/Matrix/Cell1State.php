<?php
//Cell1State.php
class Cell1State implements IMatrix
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
		echo "<img src='cells/two.png'>";
		$this->context->setState($this->context->getCell2State());
	}
	
	public function goUp()
	{
		//Illegal move
				
	}
	public function goDown()
	{
		echo "<img src='cells/four.png'>";
		$this->context->setState($this->context->getCell4State());
	}
}
?>