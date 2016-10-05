<?php
include_once("IFormat.php");
include_once("Mobile.php");

class MobileAdapter implements IFormat
{ 
    private $mobile;
    
    public function __construct(IMobileFormat $mobileNow)
	{
        $this->mobile = $mobileNow;
    }
    
    public function formatCSS()
	{
        $this->mobile->formatCSS();
    }
    
    public function formatGraphics()
	{
        $this->mobile->formatGraphics();
    }
	
	public function horizontalLayout()
	{
		$this->mobile->verticalLayout();
	}
	
}
?>
