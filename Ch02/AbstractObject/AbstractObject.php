<?php
 abstract class AbstractObject
 {
	 protected $storeHere;
	 abstract public function trick($whatever);
	 abstract protected function membersOnly();
	 
	 protected function showOff()
	 {
		 echo "Let's make some noise!" . "<br/>";
	 }
 }
?>