<?php
include_once('UniversalConnect.php');
class HashRegister
{
	private $hookup;
	private $tableMaster;
	private $sql;
	
	public function __construct()
	{
		$this->tableMaster="proxyLog";
		$this->hookup=UniversalConnect::doConnect();
		$username=$this->hookup->real_escape_string(trim($_POST['uname']));
		$pwNow=$this->hookup->real_escape_string(trim($_POST['pw']));
		
		$pwNow=md5($pwNow);

		$this->sql = "INSERT INTO $this->tableMaster (uname,pw) VALUES ('$username','$pwNow')";

		try
		{
			$this->hookup->query($this->sql);
		
			echo "Registration completed:";
		}
		catch(Exception $e)
		{
			echo "A problem has cropped up: " . $e->getMessage();
  			exit();
		}
		$this->hookup->close();
	}
}
$worker=new HashRegister();
?>