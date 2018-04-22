<?php


	function __autoload($className)
	{
		include "CLasses/$className.php";
	}

	$abc= new FullTImeEmployee();
	$xyz= new HourlyEmployee();