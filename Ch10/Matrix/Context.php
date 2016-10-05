<?php
//Context.php
class Context
{
	private $cell1;
	private $cell2;
	private $cell3;
	private $cell4;
	private $cell5;
	private $cell6;
	private $cell7;
	private $cell8;
	private $cell9;
	private $currentState;
	
	public function __construct()
	{
		$this->cell1=new Cell1State($this);
		$this->cell2=new Cell2State($this);
		$this->cell3=new Cell3State($this);
		$this->cell4=new Cell4State($this);
		$this->cell5=new Cell5State($this);
		$this->cell6=new Cell6State($this);
		$this->cell7=new Cell7State($this);
		$this->cell8=new Cell8State($this);
		$this->cell9=new Cell9State($this);
		
		//Beginning state is up to developer
		$this->currentState=$this->cell5;
	}
	//Call State methods
	public function doUp()
	{
		$this->currentState->goUp();
	}
	public function doDown()
	{
		$this->currentState->goDown();
	}
	public function doLeft()
	{
		$this->currentState->goLeft();
	}
	
	public function doRight()
	{
		$this->currentState->goRight();
	}
	
	//Set current state
	public function setState(IMatrix $state)
	{
		$this->currentState=$state;
	}
	
	//Get the states
	public function getCell1State()
	{
		return $this->cell1;
	}
	public function getCell2State()
	{
		return $this->cell2;
	}
	public function getCell3State()
	{
		return $this->cell3;
	}
	public function getCell4State()
	{
		return $this->cell4;
	}
	public function getCell5State()
	{
		return $this->cell5;
	}
	public function getCell6State()
	{
		return $this->cell6;
	}
	public function getCell7State()
	{
		return $this->cell7;
	}
	public function getCell8State()
	{
		return $this->cell8;
	}
	public function getCell9State()
	{
		return $this->cell9;
	}
	
}

?>