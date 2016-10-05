<?php
//OnState.php
class OnState implements IState
{
	private $context;
	
	public function __construct(Context $contextNow)
	{
		$this->context=$contextNow;
	}
	public function turnLightOn()
	{
		echo "Light is already on-> take no action<br/>";	
	}
	public function turnLightOff()
	{
		echo "Lights off!<br/>";
		//echo "<img src='lights/off.png'>";
		$this->context->setState($this->context->getOffState());
	}
}
?>