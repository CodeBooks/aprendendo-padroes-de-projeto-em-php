<?php
//TextFactory.php

class TextFactory extends Creator
{
	protected function factoryMethod()
	{
		$product=new TextProduct();
		return($product->getProperties());
	}
}
?>