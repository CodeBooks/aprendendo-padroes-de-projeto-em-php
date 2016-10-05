<?php
//ConcreteSubject.php
class ConcreteSubject extends Subject
{
	private $hookup;
	private $tableMaster;
	private $designPattern;
	private $stateSet=array();
		
	public function setState($dpNow)
	{
		$this->designPattern=strtolower($dpNow);
		$this->tableMaster="cms";
		$this->hookup=UniversalConnect::doConnect();
		
		//Create Query Statement
		$sql = "SELECT * FROM $this->tableMaster WHERE dpheader='$this->designPattern'";
		//Add appropriate data from MySQL table to $stateSet array
		if ($result = $this->hookup->query($sql))
		{	
			while($row=$result->fetch_assoc())
			{
					$this->stateSet[0]=$row["dpHeader"];
					$this->stateSet[1]=$row["textBlock"];
					$this->stateSet[2]=$row["imageURL"];
			}
    		$result->close();
		}
	$this->hookup->close();	
	//The update() method is part of notify()
	//implemented in Subject as concrete method.
	$this->notify();
	}
	
	public function getState()
	{
		return $this->stateSet;
	}
}
?>