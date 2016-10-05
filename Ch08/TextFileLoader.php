<?php
class TextFileLoader 
{
	private $textNow;
	public function __construct()
	{
		$this->textNow = file_get_contents ("celery.txt");
		echo $this->textNow;
	}
}
$worker=new TextFileLoader();
?>