<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('IProduct.php');

class CitrusStore implements IProduct
{
	function apples()
	{
		return "CitrusStore sez--We do not sell apples <br/>";
	}
	
	function oranges()
	{
		return "CitrusStore sez--We have citrus fruit.<br/>";
	}
}

?>
