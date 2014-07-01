<?php

//say hello to the user
if ($argc < 2)
{
    echo "Hey! I need your name to say hello to you!\n";
    die(1);
}

$name = $argv[1];

echo "Hello " . $name . "\n";

