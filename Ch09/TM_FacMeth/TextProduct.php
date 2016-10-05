<?php
//TextProduct.php
class TextProduct implements Product
{
	private $mfgProduct;
	
	public function getProperties()
	{
		$this->mfgProduct ="<div style='color:#cc0000; font-size:12px;font-family:Verdana, Geneva, sans-serif'><strong><em>Caption:</em></strong> Modigliani painted elongated faces.</div>";
		
		return $this->mfgProduct;
	}
}
?>