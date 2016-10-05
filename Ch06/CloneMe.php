<?php
//CloneMe.php
abstract class CloneMe
{
	public $name;
	public $picture;
	abstract function __clone();
}

class Person extends CloneMe
{
	public function __construct()
	{
		$this->picture="cloneMan.png";
		$this->name ="Original";
	}
	
	public function display()
	{
		echo "<img src='$this->picture'>";
		echo "<br/>$this->name <p/>";
	}
	
	function __clone() {}
}
$worker=new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name="Clonned";
$slacker->display();	
?>
