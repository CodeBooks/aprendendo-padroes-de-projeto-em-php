<?
class ConcreteObserver implements SplObserver 
{
	public function update(SplSubject $subject) 
	{
	   echo $subject->getData() . "<br />";
    }
}
?>