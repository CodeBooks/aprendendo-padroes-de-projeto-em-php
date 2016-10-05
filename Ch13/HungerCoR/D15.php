<?php
class D15 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor=$nextService;
    }

    public function handleRequest ($request)
    {
		$dateCheck= $request->getService();
		$this->monthNow=intval($dateCheck['mon']);
		$this->dayNow=intval($dateCheck['mday']);
		
		$ok=($this->monthNow == 4 && $this->dayNow >=28) || ($this->monthNow == 5 && $this->dayNow <=4);
		
		if ($ok)
        {
            $this->hungerFactory=new HungerFactory();
			echo $this->hungerFactory->feedFactory(new C15());
        }
        else if ($this->successor != NULL)
        {
                $this->successor->handleRequest ($request);
        }
    }
}
?>