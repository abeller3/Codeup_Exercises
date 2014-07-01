<?php

function inspect($variable = null, $dump = true)
{
    // Same as if ($dump == true) {...}
    if($dump)
    {
        var_dump($variable);
    } 
    else 
    {
        print_r($variable);
    }
}

function iterateArray($array)
{
    foreach($array as $item) 
    {
        $newArray[] = 'Iterated: ' . $item;
    }

    var_dump($array);
    return $newArray;
}

?>