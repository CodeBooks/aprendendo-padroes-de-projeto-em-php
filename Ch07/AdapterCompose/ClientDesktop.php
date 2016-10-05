<?php
include_once('Desktop.php');
class ClientDesktop
{
	private $design;
	public function __construct()
	{
		$this->design=new Desktop();
		$this->design->formatCSS();
		$this->design->formatGraphics();
		$this->design->horizontalLayout();
		$this->design->closeHTML();
	}
}

$worker=new ClientDesktop();

?>
