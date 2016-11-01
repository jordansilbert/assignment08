<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
*
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

//A for loop that iterates through $plain_array using the variable $i and prints all of the array’s values.

echo "Loop 1: <br>";

for ($i = 0; $i < sizeof($plain_array); $i++) {
    echo "i: $plain_array[$i] <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

//A for-each loop that iterates through $plain_array and prints all of the array’s values.

echo "Loop 2: <br>";

foreach ($plain_array as $value) {
    echo "value: $value <br>";
}


//A loop (of your choice) that iterates through $plain_array, tests each value to determine if it is an integer (e.g., 2) or a string (e.g., “two”) and prints only the integer-valued elements of the array.

echo "<br>";
echo "<br>";
echo "<br>";

echo "Loop 3: <br>";
foreach ($plain_array as $value) {
    if (gettype($value)=="integer") {
        echo "value: $value <br>";
    }
}

//A loop that iterates through the associate array $assoc_array and prints all of its keys and values.

echo "<br>";
echo "<br>";
echo "<br>";

echo "Loop 4: <br>";
    
foreach ($assoc_array as $key => $value) {
    echo "$key: $value <br>";
}

?>