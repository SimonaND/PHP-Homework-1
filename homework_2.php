<?php
	include_once("is_prime.php");
	
	global $My_array; 
	
	$My_array = range ( 20 , 1000 , 37 );
	
	function find_3_prime()
	{
		global $My_array;
		$Primes = array();
		foreach ($My_array as $key => $value) {
			if (count($Primes)==3) break;
			
			if (IsPrime($value)) $Primes[] = $value;
		}
		return $Primes[2];
	}
	
	function check_exists($value)
	{
		global $My_array;
		echo 'The number ' . $value;
		if (! in_array($value, $My_array))
		{
			echo ' does not';
		}
		echo ' exist in the array.<br />';
		
	}
	echo 'The third prime number in the array is: ';
	echo find_3_prime();
	echo '<br />';
	
	echo check_exists(146);
	echo check_exists(284);
	echo check_exists(871);
?>