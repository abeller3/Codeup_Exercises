<?php

// $value = 'Hello!';

// if (is_int($value)) {
//     echo '$value is an integer';
// } elseif (is_float($value)) {
//     echo '$value is a float';
// } elseif (is_bool($value)) {
//     echo '$value is a boolean';
// } elseif (is_array($value)) {
//     echo '$value is an array';
// } elseif (is_null($value)) {
//     echo '$value is null';
// } elseif (is_string($value)) {
//     echo '$value is a string';
// }

// $value = 'Hello!';

// switch (gettype($value)) {
//     case 'integer':
//         echo '$value is an integer';
//         break;
//     case 'float':
//         echo '$value is a float';
//         break;
//     case 'boolean':
//         echo '$value is a boolean';
//         break;
//     case 'array':
//         echo '$value is an array';
//         break;
//     case 'null':
//         echo '$value is null';
//         break;
//     case 'string':
//         echo '$value is a string';
//         break;
// }


// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
    	echo 'Monday' . PHP_EOL;
    	break;
        // Output Monday
    case 2:
    	echo 'Tuesday' . PHP_EOL;
    	break;
        // Output Tuesday
    // etc through day 7
    case 3:
    	echo 'Wednesday' . PHP_EOL;
    	break;
    case 4:
    	echo 'Thursday' . PHP_EOL;
    	break;
    case 5:
    	echo 'Friday' . PHP_EOL;
    	break;
    case 6:
    	echo 'Saturday' . PHP_EOL;
    	break;
    case 7:
    	echo 'Sunday' . PHP_EOL;
    	break;
}

date_default_timezone_set('America/Chicago');

$day_of_week = date('N');

	if ($day_of_week == 1) {
	echo 'Monday';
} 	elseif ($day_of_week == 2) {
	echo 'Tueday';
}	elseif ($day_of_week == 3) {
	echo 'Wednesday';
}	elseif ($day_of_week == 4) {
	echo 'Thursday';
}	elseif ($day_of_week == 5) {
	echo 'Friday';
} 	elseif ($day_of_week == 6) {
	echo 'Saturday';
}	elseif ($day_of_week == 7) {
	echo 'Sunday';
}
