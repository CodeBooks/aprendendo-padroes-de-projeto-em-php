<?php
include_once('Mobile.php');
class ClientMobile
{
	private $design;
	public function __construct()
	{
		$this->design=new Mobile();
		$this->design->formatCSS();
		$this->design->formatGraphics();
		$this->design->verticalLayout();
		$this->design->closeHTML();
	}
}

$worker=new ClientMobile();

?>
