<?php

$a = 5;
$b = 10;
$c = '10';

// add an else clause to the next two statements
if ($a < $b) 
{
    // output the appropriate result
    echo "$a is less than $b\n";
}
else 
{ 
    echo "$a is not equal to $b\n";
}

if ($b > $a) 
    // output the appropriate result
{
    echo "$b is greater than $a\n";
} 
else 
{
    echo "$b is not greater than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) 
    // output the appropriate result
{
    echo "$b is greater than or equal to $c\n";
}

else 
    // output the appropriate result
{
    echo "$b is not greater than or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) 
{
    // output the appropriate result
    echo "$b is equal $c\n";
}

elseif ($b === $c) 
{
    // output the appropriate result
    echo "$b is identical to $c\n";
}

elseif ($b !== $c) 
{
    // output the appropriate result
    echo "$b is not equal to $c\n";
}

elseif {
    // output the appropriate result
    echo "$b is not identical $c\n";
}

?>
