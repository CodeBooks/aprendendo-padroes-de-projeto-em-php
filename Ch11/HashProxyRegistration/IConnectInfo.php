<?php
//Filename: IConnectInfo.php
//Substitute your connect info
interface IConnectInfo
{
	const HOST ="localhost";
	const UNAME ="phpDesign";
	const PW ="phpPatterns";
	const DBNAME = "phpBase";
	
	public function doConnect();
}

?>
