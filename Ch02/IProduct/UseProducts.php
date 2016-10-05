<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('FruitStore.php');
include_once('CitrusStore.php');

class UseProducts
{
	public function __construct()
	{
		$appleSauce=new FruitStore();
		$orangeJuice=new CitrusStore();
		$this->doInterface($appleSauce);
		$this->doInterface($orangeJuice);
	}
	
	//IProduct is Type hint in doInterface()
	function doInterface(IProduct $product)
	{
		echo $product->apples();
		echo $product->oranges();
	}
}

$worker=new UseProducts();
?>