<?php
//ConcreteObserverDT.php
class ConcreteObserverDT implements Observer
{
	private $currentState;
	
	public function update(Subject $subject)
	{
		$this->currentState=$subject->getState();
		echo "<img src='desktop/$this->currentState'><br />";
	}	
}
?>