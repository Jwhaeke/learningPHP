<?php

    #Functions

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */

    //Create simpleFunction
    function simpleFunction(){
        echo 'Hi There';
    }

    //Run simpleFunction
    # simpleFunction();

    // Function with Param
    function sayHello($name){
        echo "Hello $name<br>";
    }

    function sayHello2($name = 'You'){
        echo "Hello $name<br>";
    }

    // sayHello('Joe');

    // sayHello(); This gives an error
    
    // sayHello2(); This works because of default value
    // sayHello2('Bob');


    #Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(9,3);

    #By Reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    //This wont work not prepared to be used by reference
    addFive($myNum);
    echo "value: $myNum<br>";

    // This will work because the & prepares it to be called by reference
    addTen($myNum);
    echo "value: $myNum<br>";

?>