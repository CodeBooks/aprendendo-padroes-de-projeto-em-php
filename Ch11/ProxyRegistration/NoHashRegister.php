<?php
include_once('UniversalConnect.php');
class NoHashRegister
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

		$this->sql = "INSERT INTO $this->tableMaster (uname,pw) VALUES ('$username','$pwNow')";

		try
		{
			$this->hookup->query($this->sql);
			echo "Registration completed:<br />";
			echo "$username and $pwNow have been inserted in table $this->tableMaster";
		}
		catch(Exception $e)
		{
			echo "A problem has cropped up: " . $e->getMessage();
  			exit();
		}
		$this->hookup->close();
	}
}
$worker=new NoHashRegister();
?>