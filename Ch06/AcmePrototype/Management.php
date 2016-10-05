<?php
//Management.php
include_once('IAcmePrototype.php');
class Management extends IAcmePrototype
{
	const UNIT="Management";
	private $research="research";
	private $plan="planning";
	private $operations="operations";
	
	public function setDept($orgCode)
	{
		switch($orgCode)
		{
			case 201:
			$this->dept=$this->research;
			break;
			
			case 202:
			$this->dept=$this->plan;
			break;
			
			case 203:
			$this->dept=$this->operations;
			break;
			
			default:
			$this->dept="Unrecognized Management";
		}
	}
	
	public function getDept()
	{
		return $this->dept;
	}
	function __clone(){}		
}
?>