<?
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
	function __construct()
	{
		$mo=new TmFac();
		$mo->templateMethod();
	}
}
$worker=new Client();
?>