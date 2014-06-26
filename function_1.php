<?php
function adder($a, $b)
{
    echo ($a + $b . PHP_EOL);   
}

adder(38,4);
adder(1,2);

function add($a, $b)
{
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) 
{
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) 
{
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) 
{
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b)
{
    echo $a % $b . PHP_EOL;
}

add(3,6);
subtract(4,2);
multiply(5,3);
divide(10,5);
modulus(10,5);

?>