<?php
class Client 
{		
	public function insertData()
	{
		$secure=new SecureData();
		$context=new Context(new DataEntry());
		$secure->enterData();
		$context->algorithm($secure->setEntry());
	}
	
	public function findData()
	{
		$secure=new SecureData();
		$context=new Context(new SearchData());
		$secure->conductSearch();
		$context->algorithm($secure->setEntry());
	}
	
	public function showAll()
	{
		$dummy=array(0);
		$context=new Context(new DisplayAll());
		$context->algorithm($dummy);
	}
	
	public function changeData()
	{
		$secure=new SecureData();
		$context=new Context(new UpdateData());
		$secure->makeChange();
		$context->algorithm($secure->setEntry());
		
	}
	
	public function killer()
	{
		$secure=new SecureData();
		$context=new Context(new DeleteRecord());
		$secure->removeRecord();
		$context->algorithm($secure->setEntry());
	}
}
?>