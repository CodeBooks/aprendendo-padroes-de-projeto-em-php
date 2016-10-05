<?php
//BrighterState.php
class BrighterState implements IState
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function turnLightOn()
	{
		echo "<img src='lights/nada.png'>";	
	}
	public function turnBrighter()
	{	
		echo "<img src='lights/nada.png'>";
	}
	
	public function turnBrightest()
	{
		echo "<img src='lights/brightest.png'>";
		$this->context->setState($this->context->getBrightestState());		
	}
	public function turnLightOff()
	{
		echo "<img src='lights/nada.png'>";	
	}
}
?>