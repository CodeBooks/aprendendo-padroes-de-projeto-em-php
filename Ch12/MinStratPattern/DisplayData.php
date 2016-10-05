<?php
//DisplayData.php
class DisplayData implements IStrategy
{	
	public function algorithm()
	{
		$hookup=UniversalConnect::doConnect();
		$test = "Here's all the data!!";
		echo $test . "<br/>";
	}	
}
?>