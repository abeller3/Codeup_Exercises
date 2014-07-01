<?php

//Write the output
fwrite(STDOUT, 'What is your first name?');

//Get the input from user
$first_name = fgets(STDIN);

//output the user's name
fwrite(STDOUT, "Hello $first_name\n");