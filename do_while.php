<?php
$a = 2;

//loop 1
do { 
	echo "\$a is equal to {$a}\n" . PHP_EOL;
	$a = $a *$a;
} while ($a <= 1000000);

//loop 2 
$a = 100;

do {
	echo "\$a is equal to $a" . PHP_EOL;
	$a -= 5;
} while ($a >= 0);

