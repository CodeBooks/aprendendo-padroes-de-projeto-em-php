<?php
//ProtectVis.php
abstract class ProtectVis
{
	abstract protected function countMoney();
	protected $wage;
	
	protected function setHourly($hourly)
	{
		$money=$hourly;
		return $money;
	}
}
?>