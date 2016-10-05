<?php
class C12 implements Product
{
	private $mfgProduct;
	private $formatHelper;
	private $countryNow;
	
	public function getProperties()
	{
		//Loads text writeup from external text file
		$this->countryNow=file_get_contents("../hunger/c12/clue.txt");
		
		$this->formatHelper=new FormatHelper();
		$this->mfgProduct=$this->formatHelper->addTop();
		$this->mfgProduct .="<header>Hunger Country </header>";
		$this->mfgProduct.="<img src='../hunger/c12/map.gif'  width='199' height='320'>";
		$this->mfgProduct .="<img class='pixLeft' src='../hunger/c12/pic.jpg'  width='200' height='400'>";
		$this->mfgProduct .="<p>$this->countryNow</p>";
		$this->mfgProduct .=$this->formatHelper->closeUp();
		return $this->mfgProduct;
	}
}
?>