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
		$this->context->turnOnLight();
		$this->context->turnOffLight();
		$this->context->turnOffLight();
	}
}
$worker=new Client();
?>