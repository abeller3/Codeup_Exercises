<?php
// $a = 5;
// $b = 10;
// $c = '10';

// if ($a == $b) {
// 	echo "$a is equal to $b\n";
// } else {
// 	echo "$a is not equal to $b\n";
// }

// $my_age = 29;

// shortcut for if or else 
// [condition] ? [value if true] : [value if false]; 

// 

$a = 10;
$b = '10';
if ($a === $b) {
    echo "$a is identical to $b";
} elseif ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}
