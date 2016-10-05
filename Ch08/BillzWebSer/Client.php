<?php
//Client.php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{	
	private $basicSite;
	
	public function __construct()
	{		
		$this->basicSite=new BasicSite();
		$this->basicSite=$this->wrapComponent($this->basicSite);
		
		$siteShow=$this->basicSite->getSite();
		$format="<br/>&nbsp;&nbsp;<strong>Total= $";
		$price=$this->basicSite->getPrice();
		
		echo  $siteShow . $format . $price . "</strong><p/>";	
	}
	
	private function wrapComponent(IComponent $component)
	{
		$component=new Maintenance($component);
		$component=new Video($component);
		$component=new DataBase($component);
		return $component;
	}
}
$worker=new Client()
?>