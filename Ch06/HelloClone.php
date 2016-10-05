<?php
class HelloClone
{
	private $builtInConstructor;
	public function __construct()
	{
		echo "Hello clone!<br/>";
		$this->builtInConstructor="Constructor creation<br/>";
	}
	
	public function doWork()
	{
		echo $this->builtInConstructor;
		echo "I'm doing the work!</p>";
		
	}
}
//Launch constructor
$original=new HelloClone();
$original->doWork();

//Clone does not launch constructor
$cloneIt = clone $original;
$cloneIt->doWork();

?>