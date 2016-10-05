<?php
//GraphicProduct.php

class GraphicProduct implements Product
{
	private $mfgProduct;
	
	public function getProperties()
	{
		$this->mfgProduct="<img src='pix/modig.png'>";
		return $this->mfgProduct;
	}
}
?>