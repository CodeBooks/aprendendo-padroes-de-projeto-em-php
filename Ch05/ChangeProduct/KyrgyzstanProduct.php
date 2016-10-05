<?php
//TextProduct.php
include_once('FormatHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product
{
	private $mfgProduct;
	private $formatHelper;
	
	public function getProperties()
	{
		$this->formatHelper=new FormatHelper();
		$this->mfgProduct=$this->formatHelper->addTop();
		$this->mfgProduct.=<<<KYRGYZSTAN
		<img src='Countries/Kyrgyzstan.png' class='pixRight' width='600' height='304'>
		<header>Kyrgyzstan</header>
		<p>A Central Asian country of incredible natural beauty and proud nomadic traditions, most of Kyrgyzstan was formally annexed to Russia in 1876. The Kyrgyz staged a major revolt against the Tsarist Empire in 1916 in which almost one-sixth of the Kyrgyz population was killed. Kyrgyzstan became a Soviet republic in 1936 and achieved independence in 1991 when the USSR dissolved. Nationwide demonstrations in the spring of 2005 resulted in the ouster of President Askar AKAEV, who had run the country since 1990. Subsequent presidential elections in July 2005 were won overwhelmingly by former prime minister Kurmanbek BAKIEV. Over the next few years, the new president manipulated the parliament to accrue new powers for himself. In July 2009, after months of harassment against his opponents and media critics, BAKIEV won re-election in a presidential campaign that the international community deemed flawed. In April 2010, nationwide protests led to the resignation and expulsion of BAKIEV. His successor, Roza OTUNBAEVA, served as transitional president until Almazbek ATAMBAEV was inaugurated in December 2011. Continuing concerns include: the trajectory of democratization, endemic corruption, poor interethnic relations, and terrorism.</p>	
KYRGYZSTAN;
		$this->mfgProduct.=$this->formatHelper->closeUp();
		return $this->mfgProduct;
	}
}
?>