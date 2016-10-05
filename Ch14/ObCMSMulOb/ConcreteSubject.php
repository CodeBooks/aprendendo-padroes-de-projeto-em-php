<?php
//ConcreteSubject.php
class ConcreteSubject extends Subject
{
	public function setState($stateSet)
	{
		$this->stateNow=$stateSet;
		$this->notify();
	}
	
	public function getState()
	{
		return $this->stateNow;
	}
}
?>