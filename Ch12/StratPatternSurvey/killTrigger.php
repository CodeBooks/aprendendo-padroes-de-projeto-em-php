<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
//
$makeRequest = new Client();
$makeRequest->killer();
?>