<?php
//IAcmePrototype.php
abstract class IAcmePrototype
{
	protected $name;
	protected $id;
	protected $employeePic;
	protected $dept;
	
	//Dept
	abstract function setDept($orgCode);
	abstract function getDept();
		
	//Name
	public function setName($emName)
	{
		$this->name=$emName;
	}
	
	public function getName()
	{
		return $this->name;
	}
	//ID
	public function setId($emId)
	{
		$this->id=$emId;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	//Employee Picture
	
	public function setPic($ePic)
	{
		$this->employeePic=$ePic;
	}
	
	public function getPic()
	{
		return $this->employeePic;
	}
	
abstract function __clone();	
}

?>