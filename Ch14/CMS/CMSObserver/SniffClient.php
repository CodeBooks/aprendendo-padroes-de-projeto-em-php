<?php
//User agent as property of object
error_reporting(E_ALL);
 ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class SniffClient
{
	private $userAgent;
	private $mobile=false;
	private $deviceObserver;
	private $dpNow;	
	private $sub;
	
	public function __construct()
	{
		if ( $_POST['dp'] )
			$this->dpNow=$_POST['dp'];
		$this->sub=new ConcreteSubject();
		$this->userAgent=$_SERVER['HTTP_USER_AGENT'];
		if(stripos($this->userAgent,'iphone'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverPhone();
		}
		if(stripos($this->userAgent,'android'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverPhone();
		}
		if(stripos($this->userAgent,'blackberry'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverPhone();
		}
		if(stripos($this->userAgent,'ipad'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverTablet();
		}
		if(stripos($this->userAgent,'trident'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverTablet();
		}
		if(stripos($this->userAgent,'kindle fire'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverTablet();
		}
		if(stripos($this->userAgent,'silk'))
		{
			$this->mobile=true;
			$this->deviceObserver=new ConcreteObserverTablet();
		}
		
		if(!$this->mobile)
		{
			$this->deviceObserver=new ConcreteObserverDT();
		}
		$this->sub->attachObser($this->deviceObserver);
		$this->sub->setState($this->dpNow);
	}
}

$worker=new SniffClient();

?>