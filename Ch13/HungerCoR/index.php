<?php
//trigger file
//This file can be replaced by
//wrapping this code around
//Client class
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//---------
$worker=new Client();

?>