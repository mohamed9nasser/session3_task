<?php
//- Remove duplicate values from an array
$arr = array( 
    'unique', 

    'duplicate',

    'distinct', 

    'justone', 

    'three3', 

    'duplicate', 

    'three3', 

    'three3', 

    'onlyone' 
);

$unique = array_unique($arr); 

print_r($unique);
