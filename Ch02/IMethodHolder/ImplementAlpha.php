<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

include_once('IMethodHolder.php');
class ImplementAlpha implements IMethodHolder
{
	public function getInfo($info)
	{
		echo "This is NEWS! " . $info . "<br/>";
	}
	public function sendInfo($info)
	{
		return $info;
	}
	public function calculate($first,$second)
	{
	 $calulated = $first * $second;
	 return $calulated;
	}
	public function useMethods()
	{
		$this->getInfo("The sky is falling...");
		echo $this->sendInfo("Vote for Senator Snort!") . "<br/>";
		echo "You make $" . $this->calculate(20,15) . " in your part-time job<br/>";
	}	
}

$worker=new ImplementAlpha();
$worker->useMethods();
?>