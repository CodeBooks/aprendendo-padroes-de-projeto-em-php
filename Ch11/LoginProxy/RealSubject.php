<?php
include_once('ISubject.php');

class RealSubject implements ISubject
{		
	public function request()
	{		
	$practice=<<<REQUEST
	<html>
		<link rel='stylesheet' type='text/css' href='proxy.css' />
		<body>
		<header>PHP Tip Sheet:<br>
  		<span class='subhead'>For OOP Developers</span></header>
		<ol>
  			<li>Program to the interface and not the implementation.</li>
  			<li>Encapsulate your objects.</li>
  			<li>Favor composition over class inheritance.</li>
  			<li>A class should only have a single responsibility.</li>
			</ol>
		</body>
	</html>
REQUEST;
echo $practice;	
	}
}
?>