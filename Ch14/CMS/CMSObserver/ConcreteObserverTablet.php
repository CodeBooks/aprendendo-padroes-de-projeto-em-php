 <?php
//ConcreteObserverTablet.php
class ConcreteObserverTablet implements Observer
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
		$this->doTablet();
	}
	
	private function doTablet()
	{
//Heredoc syntax
$showPage = <<<TABLET
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="tablet.css">
			<title>Tablet Page</title>
		</head>
	<body> 
	<article>
		<header>
			<h1>$this->dpHeader</h1>
		</header>
	
		<section>
			<img src="tablet/$this->imageURL" alt="image urls" >	
			<p>$this->bodytext</p>
        	
        </section>
		</article>
	</body>
	</html>
//End of Heredoc text must not have margin
TABLET;
	echo $showPage;
    }
}
?>