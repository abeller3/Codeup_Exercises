<?php

$numbers = array(1,2,3,4,5);

// Loop 1
foreach ($numbers as $key => $value) 
{
    echo "{$value}\n";
}

// Loop 2
for ($i = 1; $i <= 10; $i++) 
{
    if ($i == 2) 
    {
        echo "{$i}\n";
        break 2;
    }
}

echo "Done!\n";

// Loop 3
for ($i = 1; $i <= 100; $i+= 2) 
{
    echo $i . "\n";
    if ($i == 5) 
    {
        // exit the (for) loop
        continue; 
    } 
}

echo "DONE!\n";

//Loop 4
for ($i=1; $i <= 100; $i++) 
{ 
    if ($i % 2 == 0) 
    {
        echo $i . "\n";
        continue;
    }
}

//Loop 5
for ($i=1; $i <= 100 ; $i++)
{
    echo "{$i}\n";
    if ($i >= 10) 
    {
        break;
    }
}


