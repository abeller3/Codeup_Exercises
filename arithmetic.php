<?php
// function add($a, $b) {
// 	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
// 	echo 'ERROR: both numbers entered should be numeric, brah';
// 	} else 
//     echo $a + $b; 
//     echo PHP_EOL;
// }

// function subtract($a, $b) {
// 	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
// 	echo 'ERROR: both numbers entered should be numeric, brah';
// 	} else 
//     echo $a - $b;
//     echo PHP_EOL;
// }

// function multiply($a, $b) {
// 	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
// 	echo 'ERROR: both numbers entered should be numeric, brah';
// 	} else 
//     echo $a * $b; 
//     echo PHP_EOL;
// }

function divide($a, $b) {
	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
	echo 'ERROR: both numbers entered should be numeric, brah';
	} elseif ($a == 0 || $b == 0) {
	echo "Can't divide by zero"; 
	} else 
   echo $a / $b; 
   echo PHP_EOL;
}

// function modulus($a, $b) {
// 	if (!(is_numeric($a)) || (!(is_numeric($b))) ) {
// 	echo 'ERROR: both numbers entered should be numeric, brah';
// 	} else 
// 	echo $a % $b; 
// 	echo PHP_EOL;
// 	}


divide(10,0);



