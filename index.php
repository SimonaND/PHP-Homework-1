<?php 
echo 'Homework 1'; 
echo '<br />Course PHP 2012';
echo '<br />';

$n = $_GET['number'];

if (isset($n))
{
	
	if (is_numeric($n)) 
	{
		echo '<br />The parameter is a number';	
		if (!($n>=0&&$n<=19999))
			{
				echo '<br /><span style="color:red">The parameter is NOT within the range [0,19999]</span>';
			}
		else {
			echo '<br />The parameter is within the range [0,19999]';	
			include_once("is_prime.php");
			echo '<br />';
			if (IsPrime($n)) echo 'The number ' .$n.' is prime !';
			else echo '<span style="color:blue">The number ' .$n.' is NOT prime !</span>';
		}
	}
	else {
		echo '<br /><span style="color:red">The parameter is NOT a number</span>';
	}
}
else {
	echo 'Please enter ?number';
}
?>