<?php

function divide_return($a, $b)
{
	if ($b == 0) 
	{
		return "Cannot divide by 0";
	}
		return $a / $b;
}

function add($a, $b) 
{
    if (is_numeric($a) && is_numeric($b)) 
    {
        return $a + $b;
    }
}

$c = 3;



function add($a, $b) 
{ 
	return $a + $b;
}

echo add($c, 5). PHP_EOL;
