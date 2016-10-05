<?php
//Cats.php
include_once('FurryPets.php');
class Cats extends FurryPets
{
	function __construct()
	{
		echo "Cats " . $this->fourlegs() . "<br/>";
		echo $this->makesSound("Meow, purrr") . "<br/>";
		echo $this->ownsHouse() . "<br/>";
	}
	
	private function ownsHouse()
	{
		return "I'll just walk on this keyboard.." . "<br/>";
	}
}

?>