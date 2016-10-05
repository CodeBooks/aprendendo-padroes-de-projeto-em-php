<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('IProduct.php');

class FruitStore implements IProduct
{
	function apples()
	{
		return "FruitStore sez--We have apples <br/>";
	}
	
	function oranges()
	{
		return "FruitStore sez--We have no citrus fruit.<br/>";
	}
}
?>