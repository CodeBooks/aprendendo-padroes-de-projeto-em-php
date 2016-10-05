<?
class ConcreteSubject implements SplSubject 
{
	private $observers;
	private $data;
	
	public function setObservers() 
	{
        $this->observers=new SplObjectStorage();
    }
	
	public function attach(SplObserver $observer) 
	{
        $this->observers->attach($observer);
    }
	
	public function detach(SplObserver $observer) 
	{
        $this->observers->detach($observer);
    }
	
	public function notify() 
	{
        foreach ($this->observers as $observer) {
			
            $observer->update($this);
		}
	}
	
	public function setData($dataNow)
	{
	   $this->data=$dataNow;
	}
	
	public function getData() 
	{
        return $this->data;
    }
}
?>