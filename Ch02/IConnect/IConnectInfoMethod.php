<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

interface IConnectInfo
{
	const HOST ="localhost";
	const UNAME ="phpWorker";
	const DBNAME = "dpPatt";
	const PW ="easyWay";
	function testConnection();
}

?>
