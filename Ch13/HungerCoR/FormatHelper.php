<?php
class FormatHelper
{
	private $topper;
	private $bottom;
	private $link;
	
	public function addTop()
	{
		$this->topper="<!doctype html><html><head>
		<link rel='stylesheet' type='text/css' href='products.css'/>
		<meta charset='UTF-8'>
		<title>Map Factory</title>
		</head>
		<body>";
		return$this->topper;
	}
	
	public function closeUp()
	{
		$this->bottom="<br/><a href='Answer.html' target='_blank'>Click for Credit</a>";
		$this->bottom.="</body></html>";
		return$this->bottom;
	}
}
?>