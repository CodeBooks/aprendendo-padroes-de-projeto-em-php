<?php
interface IStrategy 
{	
    const TABLENOW ="survey";
	public function algorithm(Array $dataPack);
}
?>