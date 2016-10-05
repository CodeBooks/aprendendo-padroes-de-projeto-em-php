<?php
//Client.php
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
	//For direct instantiation
	private $fly1;
	private $fly2;
	
	//For cloning
	private $c1Fly;
	private $c2Fly;
	private $updatedCloneFly;
	
	public function __construct()
	{
		//Instantiate
		$this->fly1=new ConProFF1();
		$this->fly2=new ConProFF2();
		
		//Clone
		$this->c1Fly = clone $this->fly1;
		$this->c2Fly = clone $this->fly2;
		$this->updatedCloneFly = clone $this->fly2;
		
		//update clone
		$this->updatedCloneFly->wingColor="Purple";
		$this->updatedCloneFly->flying="Crashes into bunches of grapes.";
		$this->updatedCloneFly->eyesight="Tunnel vision";
		
		//Send through type hinting method
		$this->showFly($this->c1Fly);
		$this->showFly($this->c2Fly);
		$this->showFly($this->updatedCloneFly);
	}
		
	private function showFly(IPrototype $fly)
	{
		echo "Wing color: " . $fly->wingColor . "<br/>";
		echo "Flying characteristics: " . $fly->flying . "<br/>";
		echo "Eye sight: " . $fly->eyesight . "<p/>";
	}			
}
$worker=new Client();
?>