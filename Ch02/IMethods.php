<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

interface IMethods 
{
	protected function taskA();
	protected function taskB($alpha, $beta);
	public function taskC();
}
?>