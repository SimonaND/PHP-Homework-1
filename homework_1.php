<?php 

	$n = $_GET['number'];
	
	if (isset($n))
	{
		
		if (is_numeric($n)) 
		{
			if (!($n>=0&&$n<=19999))
				{
					echo '<span style="color:red">The parameter is NOT within the range [0,19999]</span>';
				}
			else {
				include_once("is_prime.php");
				if (IsPrime($n)) echo 'The number ' .$n.' is prime !';
				else echo '<span style="color:blue">The number ' .$n.' is NOT prime !</span>';
			}
		}
		else {
			echo '<span style="color:red">The parameter is NOT a number</span>';
		}
	}
	else {
		echo 'Please enter a number';
	}
?>