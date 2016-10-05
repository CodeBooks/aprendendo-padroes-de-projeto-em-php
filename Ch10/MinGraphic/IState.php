<?php
//IState.php
interface IState
{
	public function turnLightOff();
	public function turnLightOn();
	public function turnBrighter();
	public function turnBrightest();
}
?>