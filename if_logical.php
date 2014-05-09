<?php
$a = 5;
$b = 10;
$c = '10';

if ($a == $b) {
	echo "$a is equal to $b\n";
} else {
	echo "$a is not equal to $b\n";
}

$my_age = 29;

// shortcut for if or else 
// [condition] ? [value if true] : [value if false]; 

$can_see_die_hard = ($my_age >= 18) ? "yes!" : "no, try Disney";

if ($my_age >= 18) {
	$can_see_die_hard = "yes!";

} else {
	$can_see_die_hard = "no, really, Disney";
}
