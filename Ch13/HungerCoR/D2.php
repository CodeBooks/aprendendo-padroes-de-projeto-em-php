<?php
class D2 extends Handler
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
		
		$ok=($this->monthNow == 1 && $this->dayNow >=27) || ($this->monthNow == 2 && $this->dayNow <=2);
		
		if ($ok)
        {
            $this->hungerFactory=new HungerFactory();
			echo $this->hungerFactory->feedFactory(new C2());
        }
        else if ($this->successor != NULL)
        {
                $this->successor->handleRequest ($request);
        }
    }
}
?>