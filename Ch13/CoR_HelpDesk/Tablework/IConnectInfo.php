<?php
//Filename: IConnectInfo.php
interface IConnectInfo
{
	const HOST ="localhost";
	const UNAME ="Bill";
	const PW ="billz";
	const DBNAME = "billz";
	
	public function doConnect();
}

?>
