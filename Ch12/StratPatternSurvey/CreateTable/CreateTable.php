<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('../UniversalConnect.php');
class CreateTable
{
	private $tableMaster;
	private $hookup;
	
	public function __construct()
	{
		$this->tableMaster="survey";
		$this->hookup=UniversalConnect::doConnect();
	
		$drop = "DROP TABLE IF EXISTS $this->tableMaster";
	
		if($this->hookup->query($drop) === true)
		{
			printf("Old table %s has been dropped.<br/>",$this->tableMaster);
		}

		$sql = "CREATE TABLE $this->tableMaster (
			id SERIAL,
		 	company NVARCHAR(40),
		 	devdes NVARCHAR(10),
		 	lang 	NVARCHAR(15),
		 	plat	NVARCHAR(15),
			style	NVARCHAR(20),
			device	NVARCHAR(10),
		  	PRIMARY KEY (id))";
	
		if($this->hookup->query($sql) === true)
		{
			printf("Table $this->tableMaster has been created successfully.<br/>");
		}
		$this->hookup->close();
	}
}
$worker=new CreateTable();
?>
