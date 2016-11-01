<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = [2]; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

//A function called make_randoms whose argument is an empty array that sets $temp_num to be a random number between 1 and 5 (inclusive) and appends $temp_num to the end of the array ten times to produce an array of ten random numbers. You may hard code this one for the 10 iterations, but this is the only exception. Then, this function should print out all of these numbers with a second loop using counter $j, and return the array filled with ten random numbers.

function make_randoms($number_array) {
    for ($i = 0; $i < 10; $i++) {
        $temp_num = rand (1,5);
        array_push($number_array, $temp_num);
    }
    for ($j = 0; $j < 10; $j++) {
        echo "$j: $number_array[$j] <br>";
    }
    echo "<br>";
    return $number_array;
}
//A function called get_and_sort whose argument is an empty array that calls your previous function, make_randoms with the empty array. Then, this function should iterate through each of the random numbers in this array using counter $k and printing out only the values of that array which are greater than 3. Finally, the function should return the array of ten random numbers.

function get_and_sort($high_array, $number_array) {
    $high_array = make_randoms($number_array);
    for ($k = 0; $k < sizeof($high_array); $k++) {
        if ($high_array[$k] > 3) {
            echo "$k: $high_array[$k] <br>";
        }
    }
}

//Finally, at the end of your code file, call the function get_and_sort.
get_and_sort($high_array, $number_array);
echo "<br>";

?>