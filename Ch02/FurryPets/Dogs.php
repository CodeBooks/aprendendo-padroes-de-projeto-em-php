<?php
//Dogs.php
include_once('FurryPets.php');
class Dogs extends FurryPets
{
	function __construct()
	{
		echo "Dogs " . $this->fourlegs() . "<br/>";
		echo $this->makesSound("Woof, woof") . "<br/>";
		echo $this->guardsHouse() . "<br/>";
	}
	
	private function guardsHouse()
	{
		return "Grrrrr" . "<br/>";
	}
}

?>