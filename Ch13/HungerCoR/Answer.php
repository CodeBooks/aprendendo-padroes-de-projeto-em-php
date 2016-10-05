<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
class Answer
{
	public function __construct()
	{
		$name=$_POST['nom'];
		$country=$_POST['country'];
		$imr=$_POST['imr'];
		$female=$_POST['female'];
		$male=$_POST['male'];
		$total=$_POST['total'];
		$cause=$_POST['cause'];
		
		$msg="Student: " . $name . "<br/>";
		$msg .= "Country: " . $country . "<br/>";
        $msg .= "Infant mortality rate: " . $imr . "<br/>";
		$msg .= "Female Literacy: " . $female . "<br/>";
		$msg .= "Male Literacy: " . $male . "<br/>";
		$msg .= "TotalLiteracy: " . $total . "<br/>";
		$msg .= "Some causes: " . $cause . "<br/>";
		echo '<link rel="stylesheet" type="text/css" href="products.css" />';
		echo $msg;
		
		echo '<p>Copy and paste answer above and email to Dr. Sanders: wsanders@hartford.edu <br/><strong>->Include the name of the country on the email Subject Line</strong>.</p>';
	}
}
$worker=new Answer();
?>