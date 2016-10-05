<?php
class D3 extends Handler
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
		
		$ok=($this->monthNow == 2 && $this->dayNow >=3) && ($this->monthNow == 2 && $this->dayNow <=9);
		
		if ($ok)
        {
            $this->hungerFactory=new HungerFactory();
			echo $this->hungerFactory->feedFactory(new C3());
        }
        else if ($this->successor != NULL)
        {
                $this->successor->handleRequest ($request);
        }
    }
}
?>