<?php
$fruits = array('strawberry', 'Apple', 'Pineapple', 'Pear');

//print_r($fruits);

/*
 * Associative arrays in php
 */

//$fruits = array('f' => 'strawberry', 'a' => 'Apple', 'p' => 'Pineapple');
$fruits = array('strawberry', 'Apple', 'Pineapple', 'Pear');

//print_r($fruits);

/*
 * Printing arrays is php
 */

for ($i = 0; $i < count($fruits); $i++){
    echo $fruits[$i]. "<br>";
}

// Printing arrays using foreach loop
echo "Using foreach loop<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Inserting new elements in an array

$fruits[] = "Pear";
