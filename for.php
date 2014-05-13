<?php

fwrite(STDOUT, "Enter a starting number\n");

$user_starting = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an ending numbers only\n");

$user_ending = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an incrementer\n");

$user_increm = trim(fgets(STDIN));

if (!(is_numeric($user_starting)) || !(is_numeric($user_ending))) {
	echo "Please enter in a number\n";
	die(1);
}

if (!(is_numeric($user_increm))) {
	$user_increm= 1;
}

for ($n = $user_starting; $n <= $user_ending; $n += $user_increm) {
	echo "n is {$n}\n";
}	