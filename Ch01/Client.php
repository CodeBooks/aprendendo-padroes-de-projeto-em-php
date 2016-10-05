<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('MobileSniffer.php');
class Client
{
	private $mobSniff;
	public function __construct()
	{
		$this->mobSniff=new MobileSniffer();
		echo "Device = " . $this->mobSniff->findDevice() . "<br/>";
		echo "Browser = " . $this->mobSniff->findBrowser() . "<br/>";
	}
}

$trigger=new Client();
?>