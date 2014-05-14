<?php

$fruits= ['kiwi'=> 'green','mango' => 'orange','pineapple' => 'yellow','strawberries' => 'red','watermelon' => 'pink'];

print_r($fruits); 

// for ($i=0; $i < count($fruits) ; $i++) { 
// 	$fruit=$fruits[$i];
// 	echo $fruit .PHP_EOL;
// }

// foreach ($fruits as $key => $value) {
// 	echo "$value is at key $key\n";
// 	}

foreach ($fruits as $key => $value) {
	echo "$key" . "s" . " are $value\n";
}
?>