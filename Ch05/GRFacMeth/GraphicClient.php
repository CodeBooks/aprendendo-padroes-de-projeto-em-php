<?php
include_once('GraphicFactory.php');
include_once('TextFactory.php');
class GraphicClient
{
	private $someGraphicObject;
	private $someTextObject;
	
	public function __construct()
	{		
		$this->someGraphicObject=new GraphicFactory();
		echo $this->someGraphicObject->doFactory() . "<br/>";
		$this->someTextObject=new TextFactory();
		echo $this->someTextObject->doFactory() . "<br/>";
	}
}

$worker=new GraphicClient();
?>