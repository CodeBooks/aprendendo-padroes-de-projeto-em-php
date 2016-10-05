<?php
//Cell71State.php
class Cell7State implements IMatrix
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
		echo "<img src='cells/eight.png'>";
		$this->context->setState($this->context->getCell8State());
	}
	
	public function goUp()
	{
		echo "<img src='cells/four.png'>";
		$this->context->setState($this->context->getCell4State());
				
	}
	public function goDown()
	{
		//Illegal move
	}
}
?>