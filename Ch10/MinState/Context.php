<?php
//Context.php
class Context
{
	private $offState;
	private $onState;
	private $currentState;
	
	public function __construct()
	{
		$this->offState=new OffState($this);
		$this->onState=new OnState($this);
		
		//Beginning state is Off
		$this->currentState=$this->offState;
	}
	//Call State methods--triggers
	public function turnOnLight()
	{
		$this->currentState->turnLightOn();
	}
	
	public function turnOffLight()
	{
		$this->currentState->turnLightOff();
	}
	//Set current state
	public function setState(IState $state)
	{
		$this->currentState=$state;
	}
	
	//Get the states
	public function getOnState()
	{
		return $this->onState;
	}
	public function getOffState()
	{
		return $this->offState;
	}	
}

?>