<?php
class DataEntry implements IStrategy
//DataEntry.php
{	
	private $tableMaster;
	private $dataPack;
	private $hookup;
	private $sql;
	
	public function algorithm(Array $dataPack)
	{
		$this->dataPack=$dataPack;
		$comval=$this->dataPack[0];
		$devdesval=$this->dataPack[1];
		$langval=$this->dataPack[2];
		$platval=$this->dataPack[3];
		$styleval=$this->dataPack[4];
		$deviceval=$this->dataPack[5];
		
		$this->tableMaster=IStrategy::TABLENOW;
		$this->hookup=UniversalConnect::doConnect();
		$this->sql = "INSERT INTO $this->tableMaster
		(
			company,
		 	devdes,
		 	lang,
		 	plat,
			style,
			device
		)	
		VALUES 
		(	
			'$comval',
			'$devdesval',
			'$langval',
			'$platval',
			'$styleval',
			'$deviceval'	
		)";
		
		if($this->hookup->query($this->sql))
		{
			printf("Successful data entry for table: $this->tableMaster <br/>");
		}
		elseif ( ($result = $this->hookup->query($this->sql))===false )
		{
  			printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->hookup->error, $this->sql);
  			exit();
		}
		
		$this->hookup->close();
	}	
}
?>