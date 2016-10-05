<?php
//Creator.php
abstract class Creator
{	
	protected abstract function factoryMethod();
	
	public function doFactory()
	{
		$mfg= $this->factoryMethod();
		return $mfg;
	}	
}
?>