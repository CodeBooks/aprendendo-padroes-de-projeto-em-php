<?php
//DataEntry.php
ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);
include_once('UniversalConnect.php');
class DataEntry
{
	private $tableMaster;
	private $hookup;
	private $sql;
	
	public function __construct()
	{
		$this->tableMaster="cms";
		$this->hookup=UniversalConnect::doConnect();
		
		if ( $_POST['dpHeader'] )
		$dpHeader=$this->hookup->real_escape_string($_POST['dpHeader']);
		if ( $_POST['textBlock'] )
		$textBlock=$this->hookup->real_escape_string($_POST['textBlock']);
		if ( $_POST['imageURL'] )
		$imageURL=$this->hookup->real_escape_string($_POST['imageURL']);
		
		$this->sql = "INSERT INTO $this->tableMaster 
			(dpHeader,textBlock,imageURL) VALUES
			('$dpHeader','$textBlock','$imageURL')";
	
		if($this->hookup->query($this->sql))
		{
			printf("Successful data entry for table: $this->tableMaster <br/>");
		}
		elseif ( ($result = $this->hookup->query($this->sql))===false )
		{
  			printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->hookup->error, $this->sql);
  			exit();
		}
		$this->hookup->close();
	}	
}
$worker=new DataEntry();
?>
