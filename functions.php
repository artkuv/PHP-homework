<?php

function exponentiation(int $value = 1, int $exp = 1)
{
	$result = $value;

	for( $i = 1 ; $i < $exp; $i++ )
		$result *= $value;

	return $result;
}

$expResult = exponentiation(2,10);
echo $expResult . '<br>';

function fibonachi()
{
	$first = 0;
	$second = 1;
	for ($i=0; $i < 100; $i++) 
	{ 
		$result = $first + $second;
		$first = $second;
		$second = $result;
	}

	return $result;
}

echo(fibonachi());

