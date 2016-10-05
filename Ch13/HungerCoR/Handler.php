<?php

	abstract class Handler
	{
		abstract public function handleRequest($request); 
		abstract public function setSuccessor($nextService);
		protected $hungerFactory;
		protected $successor;
		protected $monthNow;
		protected $dayNow;		
	}

?>
