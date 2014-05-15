<?php
function add($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} else 
    echo $a + $b; 
    echo PHP_EOL;
}

function subtract($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} else 
    echo $a - $b;
    echo PHP_EOL;
}

function multiply($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} else 
    echo $a * $b; 
    echo PHP_EOL;
}

function divide($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} else 
   echo $a / $b; 
   echo PHP_EOL;
}

function modulus($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} else 
	echo $a % $b; 
	echo PHP_EOL;
	}

add(5,10);
subtract('love','7');
multiply(9,5);
divide(10,2);



