<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');
class CreateTable
{
	private $tableMaster="proxyLog";
	private $hookup;
	
	public function __construct()
	{
		$operation=new UniversalConnect();
		$this->hookup=$operation->doConnect();	
	
		$drop = "DROP TABLE IF EXISTS $this->tableMaster";
	
		if($this->hookup->query($drop) === true)
		{
			printf("Old table $this->tableMaster has been dropped.<br/> \n");
		}

		$sql = "CREATE TABLE $this->tableMaster 
				(
				uname NVARCHAR(20),
				pw NVARCHAR(160)
				)";
	
		if($this->hookup->query($sql) === true)
		{
			printf("Table $this->tableMaster has been created successfully.<br/> \n");
		}

		$this->hookup->close();
	}
}
$worker=new CreateTable();
?>
