<?php
//HungerFactory.php
class HungerFactory extends Creator
{
	private $country;
	
	protected function factoryMethod(Product $product)
	{
		$this->country=$product;
		return($this->country->getProperties());
	}
}
?>