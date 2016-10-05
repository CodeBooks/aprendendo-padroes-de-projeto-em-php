<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

include_once('AbstractObject.php');

class ConcreteObject extends AbstractObject
{
	public function trick($whatever)
	{
		return $whatever;
	}
	
	protected function membersOnly()
	{
		$this->storeHere= "Only used by child classes of AbstractObject";
		echo $this->storeHere . "<br/>";
	}
	
	public function goNuts()
	{
		$this->membersOnly();
		$this->showOff();
		
	}
}
$worker=new ConcreteObject();
$worker->goNuts();
echo $worker->trick("Available to all...");
?>