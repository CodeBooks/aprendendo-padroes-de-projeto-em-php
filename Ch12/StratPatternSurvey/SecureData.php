<?php
//Helper class
//SecureData.php
class SecureData 
{	
	private $changeField;
	private $company;
	private $devdes;
	private $device;
	private $disappear;
	private $field;
	private $hookup;
	private $lang;
	private $newData;
	private $oldData;
	private $plat;
	private $style;
	private $term;
	//$dataPack will be an array	
	private $dataPack;

	public function enterData()
	{
		$this->hookup=UniversalConnect::doConnect();
		$this->company=$this->hookup->real_escape_string($_POST['company']); 
		$this->devdes=$this->hookup->real_escape_string($_POST['devdes']); 
		$this->lang= $this->hookup->real_escape_string($_POST['lang']);
		$this->plat= $this->hookup->real_escape_string($_POST['plat']);
		$this->style=$this->hookup->real_escape_string($_POST['style']); 
		$this->device=$this->hookup->real_escape_string($_POST['device']);	
		$this->dataPack=array(
			$this->company,
			$this->devdes,
			$this->lang,
			$this->plat,
			$this->style,
			$this->device
		);	
		
		$this->hookup->close();	
	}
	
	public function conductSearch()
	{
		$this->hookup=UniversalConnect::doConnect();
		$this->field=$this->hookup->real_escape_string($_POST['field']); 
		$this->term=$this->hookup->real_escape_string($_POST['term']);
		$this->dataPack=array(
			$this->field,
			$this->term
			);
		$this->hookup->close();
	}
	
	public function makeChange()
	{
		$this->hookup=UniversalConnect::doConnect();
		$this->changeField=$this->hookup->real_escape_string($_POST['update']); 
		$this->oldData=$this->hookup->real_escape_string($_POST['old']);
		$this->newData=$this->hookup->real_escape_string($_POST['new']);
		$this->dataPack=array(
			$this->changeField,
			$this->oldData,
			$this->newData
			);
		$this->hookup->close();
	}
	
	public function removeRecord()
	{
		$this->hookup=UniversalConnect::doConnect();
		$this->disappear=$this->hookup->real_escape_string($_POST['delete']); 
		$this->dataPack=array($this->disappear);
		$this->hookup->close();
	}
	
	//Returns secure data as array to requesting Client
	public function setEntry()
	{
		return $this->dataPack;
	}	
}
?>