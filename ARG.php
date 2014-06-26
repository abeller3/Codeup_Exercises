<?php 

$numbers = array(1, 2, 3, 4, 5);

for ($i = 0; $i < count($numbers); $i+= 2) 
{
    echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
}