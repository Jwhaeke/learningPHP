<?php

#   LOOPS - Execute code set numbers of times

/*

    For
    While
    Do.. While
    Foreach
*/

# For Loops
# @params - init, condition, inc

// for ($i=0; $i <= 10; $i++) { 
//     echo 'Number '.$i;
//     echo '<br>';
// }

#While Loop
# @Params - Condition

// $i = 0;

// while ($i < 10) {
//     echo $i;
//     echo '<br>';
//     $i++;
// }


#Do...While
# @Params - condition

// $i = 0;

// do{
//     echo $i;
//     echo '<br>';
//     $i++;
// }

// while($i <10);

# ForEach Loop


// $people = array('Brad', 'Jose', 'William');

// foreach ($people as $person) {
//     echo $person;
//     echo'<br>';
// }

$people = array('Brad' => 'brad@email.com', 'Jose' => 'jose@email.com', 'William' => 'will@email.com');

foreach ($people as $person => $email) {
    echo $person.': '.$email;
    echo'<br>';
}

?>