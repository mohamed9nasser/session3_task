<?php

// Program to change on item in an array to upper case

$input = array("Practice", "ON", "GeeKs", "is best");

// print array before conversion of string
print"Array before string conversion:";
print_r($input);

// Step 1: flip array key => value
$input = array_flip($input);

// Step 2: change case of new keys to upper
$input = array_change_key_case($input, CASE_UPPER);

// Step 3: reverse the flip process to 
// regain strings as value
$input = array_flip($input);

echo "<br>";
// print array after conversion of string
print"Array after string conversion:";
print_r($input);

?>
