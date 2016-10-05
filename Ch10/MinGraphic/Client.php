<?php
//Client.php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//---------

class Client
{
	private $context;
	
	public function __construct()
	{
		$this->context=new Context();
		$this->context->turnOnLight();
		$this->context->turnBrighterLight();
		$this->context->turnBrightestLight();
		$this->context->turnOffLight();
		$this->context->turnBrightestLight();
	}
}
$worker=new Client();
?>