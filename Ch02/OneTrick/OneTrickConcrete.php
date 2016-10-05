<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

include_once('OneTrickAbstract.php');

class OneTrickConcrete extends OneTrickAbstract
{
	public function trick($whatever)
	{
		$this->storeHere="An abstract property";
		return $whatever . $this->storeHere;		
	}
}

$worker=new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");
?>