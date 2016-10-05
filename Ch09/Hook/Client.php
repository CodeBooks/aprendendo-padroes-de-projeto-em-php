<?
//Client.php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//---------
class Client
{
	private $buyTotal;
	private $gpsNow;
	private $mapNow;
	private $boatNow;
	private $special;
	private $zamCalc;
	
	function __construct()
	{
		$this->setHTML();
		$this->setCost();
		$this->zamCalc=new ZambeziCalc();
		$this->zamCalc->templateMethod($this->buyTotal,$this->special);
	}
	
	private function setHTML()
	{
		$this->gpsNow=$_POST['gps'];
		$this->mapNow=$_POST['map'];
		$this->boatNow=$_POST['boat'];
	}
	
	private function setCost()
	{
		$this->buyTotal=$this->gpsNow;
		foreach($this->mapNow as $value)
		{
			 $this->buyTotal+= $value;
		}
		//Boolean
		$this->special = ($this->buyTotal >= 200);
		$this->buyTotal += $this->boatNow;
	}
	
}
$worker=new Client();
?>