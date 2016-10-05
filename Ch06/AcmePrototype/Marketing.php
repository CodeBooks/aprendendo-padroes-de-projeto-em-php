<?php
//Marketing.php
include_once('IAcmePrototype.php');
class Marketing extends IAcmePrototype
{
	const UNIT="Marketing";
	private $sales="sales";
	private $promotion="promotion";
	private $strategic="strategic planning";
	
	public function setDept($orgCode)
	{
		switch($orgCode)
		{
			case 101:
			$this->dept=$this->sales;
			break;
			
			case 102:
			$this->dept=$this->promotion;
			break;
			
			case 103:
			$this->dept=$this->strategic;
			break;
			
			default:
			$this->dept="Unrecognized Marketing ";
		}
	}
	
	public function getDept()
	{
		return $this->dept;
	}
	
	function __clone(){}	
}
?>