<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

function addEmUp($first,$second)
{
	$total=$first + $second;
	echo $total;
}
addEmUp(20,40);

?>
