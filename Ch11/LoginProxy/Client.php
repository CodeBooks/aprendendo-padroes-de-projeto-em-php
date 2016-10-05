<?php
include_once("Proxy.php");
class Client
{
	private $proxy;
	private $un;
	private $pw;
	
	public function __construct()
	{
		$this->tableMaster="proxyLog";
		$this->hookup=UniversalConnect::doConnect();
		$this->un=$this->hookup->real_escape_string(trim($_POST['uname']));
		$this->pw=$this->hookup->real_escape_string(trim($_POST['pw']));
		$this->getIface($this->proxy=new Proxy());
	}
	
	private function getIface(ISubject $proxy)
	{
			$proxy->login($this->un,$this->pw);
	}
}
$worker=new Client();
?>