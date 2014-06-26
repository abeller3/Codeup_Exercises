<?php
//output instructions to user for number
fwrite(STDOUT, "Enter a starting number\n");

//trim user input for white space
$user_starting = trim(fgets(STDIN));

//prompt user for ending number 
fwrite(STDOUT, "Enter an ending numbers only\n");

//trim user input for white space
$user_ending = trim(fgets(STDIN));

//prompt user for incrementer
fwrite(STDOUT, "Enter an incrementer\n");

//trim user input for white space
$user_increm = trim(fgets(STDIN));


//check if values inputed are numeric
if (!(is_numeric($user_starting)) || !(is_numeric($user_ending))) 
{
	echo "Please enter in a number\n";
	die(1);
}
//if value enterted for incrementer is not numeric, default to 1
if (!(is_numeric($user_increm))) 
{
	$user_increm = 1;
	die(2);
}

for ($n = $user_starting; $n <= $user_ending; $n += $user_increm) 
{
	echo "n is {$n}\n";
}	