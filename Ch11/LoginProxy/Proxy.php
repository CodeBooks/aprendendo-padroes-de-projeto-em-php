<?php
include_once("ISubject.php");
include_once('RealSubject.php');
include_once('UniversalConnect.php');
class Proxy implements ISubject
{
	private $tableMaster;
	private $hookup;
	private $logGood;
	private $realSubject;
	
	public function login($uNow,$pNow)
	{
		//Filtered from Client; hash the password
		$uname=$uNow;
		//$pw=md5($pNow);
		$pw=$pNow;
		$this->logGood=false;
		//Choose table and connect
		$this->tableMaster="proxyLog";
		$this->hookup=UniversalConnect::doConnect();
		
		//Create MySQL statement
		$sql = "SELECT uname, pw FROM $this->tableMaster WHERE uname='$uname'";

		if($result=$this->hookup->query($sql))
		{
			$row=$result->fetch_array(MYSQLI_ASSOC);
			if($row['pw']==$pw)
			{
				$this->logGood=true;
			}
		$result->close();
		}
		elseif ( ($result = $this->hookup->query($sql))===false )
		{
  			printf("Failed: %s <br/>", $this->hookup->error);
  			exit();
		}
		$this->hookup->close();
		
		if($this->logGood)
		{
			$this->request();
		}
		else
		{
			echo "Username and/or Password not on record.";
		}
	}
	public function request()
	{	
		$this->realSubject=new RealSubject();
		$this->realSubject->request();	
	}
}

?>		