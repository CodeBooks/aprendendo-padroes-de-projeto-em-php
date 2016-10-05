<?php
class DoText
{
	private $textOut;
	private $fullFace;
	
	public function numToText($num)
	{
		$this->textOut=(string)$num;
		return $this->textOut;
	}
	
	public function addFace($face, $msg)
	{
		$this->fullFace= "<strong>" . $face . "</strong>: " . $msg;
		return $this->fullFace;
	}
}
?>