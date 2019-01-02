<?php
    //echo 'Hello World'; 
    //print 'Echo is most used'; 

    

    #Variables
    /*
        - Prefix $
        - Start with letter or _   
        - Only letters, numbers and _
        - Case sensitive
    */

    /*
    $output = 'Hello!';
    echo $output;
    */

    #DATA TYPES
    /*
        Strings
        Integers
        floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'you';
    $greeting = $string1 . $string2;
    $greeting2 = "$string1 $string2";

    $string3 = 'They\'re Here';
    // use \ to escape the result of for instance '

    $float1 = 4.4;
    $bool1 = true;

    define("GREETING", 'Hello you!',true);
    //adding true in the end makes the constant case insensitive

    echo GREETING;



?>