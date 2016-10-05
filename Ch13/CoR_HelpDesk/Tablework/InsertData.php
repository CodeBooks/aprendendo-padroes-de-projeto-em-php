<?php
ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');
class InsertData
{
	private $tableMaster;
	private $hookup;
	
	public function __construct()
	{
		
		//Name table and connect
		$this->tableMaster="helpdesk";
		$this->hookup=UniversalConnect::doConnect();
		//From HTML form
		$chain=$this->hookup->real_escape_string($_POST['chain']);
		$response=$this->hookup->real_escape_string($_POST['response']);
		
		//Create MySQL statement
		$sql = "INSERT INTO $this->tableMaster (chain,response) VALUES ('$chain','$response')";

		if($this->hookup->query($sql))
		{
			printf("Chain query: %s <br/>Response %s <br/> have been inserted into %s.",$chain,$response,$this->tableMaster);
		}
		//%s is a string from parameter
		elseif ( ($result = $this->hookup->query($sql))===false )
		{
  			printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->hookup->error, $sql);
  		exit();
		}
		$this->hookup->close();
	}
}
$worker=new InsertData();
?>
