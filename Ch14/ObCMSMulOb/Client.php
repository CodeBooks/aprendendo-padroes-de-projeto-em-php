<?php
//Client.php
error_reporting(E_ALL);
 ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//---------
class Client
{
	public function __construct()
	{
		$sub=new ConcreteSubject();
		
		$ob1=new ConcreteObserverPhone();
		$ob2=new ConcreteObserverTablet();
		$ob3=new ConcreteObserverDT();
		
		$sub->attachObser($ob1);
		$sub->attachObser($ob2);
		$sub->attachObser($ob3);
		$sub->setState("decoCar.png");
	}
}
$worker=new Client();
?>