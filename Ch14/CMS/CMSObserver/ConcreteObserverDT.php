<?php
//ConcreteObserverDT.php
class ConcreteObserverDT implements Observer
{
	private $currentState=array();
	private $dpHeader;
	private $bodytext;
	private $imageURL;
	
	public function update(Subject $subject)
	{
		$this->currentState=$subject->getState();
		$this->dpHeader=$this->currentState[0];
		$this->bodytext=$this->currentState[1];
		$this->imageURL=$this->currentState[2];
		$this->doDesktop();
	}
	
	private function doDesktop()
	{
$showPage = <<<DESKTOP
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="desktop.css">
			<title>Desk Top Page</title>
		</head>
	<body> 
	<article>
		<header>
			<h1>$this->dpHeader</h1>
		</header>
	
		<section>
			<img src="desktop/$this->imageURL" alt="image urls" >	
			<p>$this->bodytext</p>
        	
        </section>
		</article>
	</body>
	</html>
DESKTOP;
	echo $showPage;
    }
}
?>