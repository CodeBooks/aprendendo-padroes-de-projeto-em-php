<?php
//Filename: IConnectInfo.php
interface IConnectInfo
{
	const HOST ="localhost";
	const UNAME ="phpDev";
	const PW ="goDP";
	const DBNAME = "dpFactory";
	
	public function doConnect();
}
?>
