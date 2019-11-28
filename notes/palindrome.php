<?php

$input = $_GET['number'];
$newnum = palindrome($input);

if($input == $newnum)
{
	echo "$input is palindrome number";
}
else
{
	echo "$input is not palindrome number";
}

function palindrome($n)
{
	$revnum = 0;
	
	while(floor($n))
	{
		$rem = $n % 10;
		$revnum = $revnum * 10 + $rem;
		$n = $n / 10;
	}
	return $revnum;
}

?>