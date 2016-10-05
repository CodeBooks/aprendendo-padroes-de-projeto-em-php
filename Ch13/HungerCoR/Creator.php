<?php
//Creator.php
abstract class Creator
{	
	protected abstract function factoryMethod(Product $product);
	
	public function feedFactory($productNow)
	{
		$countryProduct=$productNow;
		$mfg= $this->factoryMethod($countryProduct);
		return $mfg;
	}	
}
?>