<?php
class DoMath
{
	private $sum;
	private $quotient;
	
	public function simpleAdd($first,$second)
	{
		$this->sum=($first + $second);
		return $this->sum;
	}
	
	public function simpleDivide($dividend, $divisor)
	{
		$this->quotient=($dividend/$divisor);
		return $this->quotient;
	}
}
?>