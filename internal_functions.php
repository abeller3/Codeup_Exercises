<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

function set($variable_set)
{
	if(isset($variable_set)) 
	{
		echo "variable is SET!" . PHP_EOL;
	} 
	elseif(empty($variable_set)) 
	{
		echo "variable is EMPTY!" . PHP_EOL;	
	}
	
}

$serial= serialize($array);
var_dump($serial);
var_dump($array);
$unserial = unserialize($serial);
var_dump($serial);
print_r($unserial);
