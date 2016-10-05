<?php
//ProgramLang.php
//Concrete decorator
class ProgramLang extends Decorator 
{
	private $languageNow;
	
	public function __construct(IComponent $dateNow) 
	{
		$this->date = $dateNow;
		$this->getDate();
	}
	
	private $language=array("php"=>"PHP",
							"cs"=>"C#",
							"js"=>"JavaScript",
							"as3"=>"ActionScript 3.0");
	
	public function setFeature($lan)
	{
		$this->languageNow=$this->language[$lan]; 
	}
	
	public function getFeature()
	{
		$output=$this->date->getFeature();
		$fmat="<br/>&nbsp;&nbsp;";
		$output .="$fmat Preferred programming language: ";
		$output .= $this->languageNow; 
		return  $output;
	}	
}
?>
