<?php

function error($a, $b)
{
    return "ERROR: Enter in numeric values only" . PHP_EOL;
}


function add($a, $b)
{
    if (!(is_numeric($a)) || (!(is_numeric($b))) )
    {
        echo error($a, $b);
    } 
    else 
    {
        return $a + $b;
    }
}

function subtract($a, $b) 
{
    if (!(is_numeric($a)) || (!(is_numeric($b))) ) 
    {
        echo error($a,$b);
    } 
    else 
    {
        return $a - $b;
    }       
}

function multiply($a, $b) 
{
    if (!(is_numeric($a)) || (!(is_numeric($b))) )
    {
        echo error($a,$b);
    } 
    else 
    {
        return $a * $b; 
    }
}

function divide($a, $b) 
{
    if (!(is_numeric($a)) || (!(is_numeric($b))) ) 
    {
        echo error($a,$b);
    } 
    elseif ($a == 0 || $b == 0) 
    {
        echo "Can't divide by zero" . PHP_EOL;
        return false;
    } 
    else 
    {   
        return $a / $b;
    }
}


function modulus($a, $b) 
{
    if (!(is_numeric($a)) || (!(is_numeric($b))) ) 
    {
        echo error($a,$b);
    } 
    else
    {
        return $a % $b;
    } 
}

echo add('cat',2) . PHP_EOL;
divide(3,0). PHP_EOL;
echo subtract(6,4) . PHP_EOL;
echo multiply(5,3) . PHP_EOL;
echo modulus(5,4) . PHP_EOL;
  

