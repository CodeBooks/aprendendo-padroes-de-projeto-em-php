<?
//AbstractClass.php
abstract class AbstractClass
{
	protected $pix;
	protected $cap;
	
	public function templateMethod($pixNow,$capNow)
	{
		$this->pix=$pixNow;
		$this->cap=$capNow;
		$this->addPix($this->pix);
		$this->addCaption($this->cap);
	}

	abstract protected function addPix($pix);
	abstract protected function addCaption($cap);
}
?>