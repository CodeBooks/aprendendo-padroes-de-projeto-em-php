<?php
class PrimitiveWrap 
{
	private $wrapeMe;
	public function __construct($prim)
	{
		$this->wrapeMe=$prim;
	}
	
	public function showWrap()
	{
		return $this->wrapeMe;
	}
}
$myPrim=521;
$wrappedUp=new PrimitiveWrap($myPrim);
echo $wrappedUp->showWrap();
?>