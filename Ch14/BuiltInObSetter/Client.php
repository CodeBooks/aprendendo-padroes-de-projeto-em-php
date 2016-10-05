<?php
//Client
error_reporting(E_ALL);
 ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//
class Client
{
	public function __construct()
	{
		echo "<p>Create three new concrete observers, a new concrete subject:</p>";
		$ob1 = new ConcreteObserver();
		$ob2 = new ConcreteObserver();
		$ob3 = new ConcreteObserver();

		$subject = new ConcreteSubject();
		$subject->setObservers();
		$subject->setData("Here's your data!");
		$subject->attach($ob1);
		$subject->attach($ob2);
		$subject->attach($ob3);
		
		$subject->notify();
		
		echo "<p>Detach observer ob3. Now only ob1 and ob2 are notified:</p>";
		$subject->detach($ob3);
		$subject->notify();
		
		echo "<p>Reset data and re-attach ob3 and detach ob2--only ob 1 and 3 are notified:</p>";
		$subject->setData("More data that only ob1 and ob3 need.");
		$subject->attach($ob3);
		$subject->detach($ob2);
		$subject->notify();	
	}
}

$worker=new Client();
?>