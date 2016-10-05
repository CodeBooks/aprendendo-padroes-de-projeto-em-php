<?php
//Client.php
include_once('GraphicFactory.php');
class Client
{
	private $someGraphicObject;
	private $someTextObject;
	
	public function __construct()
	{		
		$this->someGraphicObject=new GraphicFactory();
		echo $this->someGraphicObject->doFactory() . "<br/>";
	}
}

$worker=new Client();
?>