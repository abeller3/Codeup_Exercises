<?php

fwrite(STDOUT, "Enter in a year to determine if it is a leap year.\n");

$year = trim(fgets(STDIN));

if(($year % 4 == 0) && ($year % 100) && ($year % 400))
{
	if($year < 2014) 
	{
	echo "This was a leap year!" . PHP_EOL;
	}
	else if($year > 2014) 
	{
		echo "This year will be a leap year!";
	}
}
else
{
	echo "This year is not a leap year!" . PHP_EOL;
}


?>