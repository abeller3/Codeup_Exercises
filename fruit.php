<?php

$fruits= ['kiwi'=> 'green','mango' => 'orange','pineapple' => 'yellow','strawberries' => 'red','watermelon' => 'pink'];

print_r($fruits); 

for ($i=0; $i < count($fruits) ; $i++)
{ 
    echo $fruits[$i] . PHP_EOL;
}

foreach ($fruits as $key => $value) 
{
    echo "$value is at key $key\n";
}
 
// Following Foreach's are same 


foreach ($fruits as $key => $value)
{
    echo "$key" . "s" . " are $value\n";
}

foreach ($fruits as $fruit => $color)
{
    echo "{$fruit} are {$color}\n";
}

?>