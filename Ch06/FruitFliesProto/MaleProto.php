<?php
//MaleProto.php
include_once('IPrototype.php');
class MaleProto extends IPrototype
{
	const gender="MALE";
	public $mated;
	
	public function __construct()
	{
		$this->eyeColor="red";
		$this->wingBeat="220";
		$this->unitEyes="760 ";
	}
	function __clone(){}
}
?>