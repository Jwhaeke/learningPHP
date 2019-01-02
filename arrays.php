<?php

#   ARRAYS

/*

    -Indexed
    -Associative
    -Multi-dimensional

*/

// Indexed

// $people = array('Bob', 'mike', 'jim');
$ids = array(23, 55, 12);
$cars = ['Honda', 'Toyota', 'Ford'];

$cars[3] = 'Chevy';
$cars[] = 'BMW';

// echo count($cars);
// Gives number of items in array

// print_r($cars);
// prints out entire array

// var_dump($cars);
// Same as above with more info


// echo $people[1];
// echo $ids[2];
// echo $cars[4];


# Associative array

$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

// echo $people['Brad'];
// echo $ids[22];

$people['Jill'] = 42;
// echo $people['Jill'];

// print_r($people);
// var_dump($people);

# Multi-Dimensional

// $cars = array (
//     array('Honda', 20, 10),
//     array('Ford', 30, 20),
//     array('VW', 23, 12),

// );

// echo $cars[1][2];