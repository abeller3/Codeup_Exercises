<?php

function error($a,$b) {
	echo "ERROR: either $a  or $b is not a number. Enter in numeric values only";
	}
function zero() {
	echo "Can't divide by zero!!!";
}

function add($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	error($a,$b);
	} else 
    echo $a + $b; 
    echo PHP_EOL;
}

function subtract($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	error($a,$b);
	} else 
    echo $a - $b;
    echo PHP_EOL;
}

function multiply($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	error($a,$b);
	} else 
    echo $a * $b; 
    echo PHP_EOL;
}

function divide($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	error($a,$b);
	} elseif ($a == 0 || $b == 0) {
	zero();
	} else 	
   echo $a / $b; 
   echo PHP_EOL;
}


function modulus($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	error($a,$b);
	} else 
	echo $a % $b; 
	echo PHP_EOL;
	}

add(6,9);
divide(10,0);
multiply(5,'love');
modulus(10,5);
subtract(6,1);



