<?php

    # CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    $num = '5';

    // if ($num == 5) {
    //     echo '5 passed';
    // }

    // $num = '5';

    // if ($num === 5) {
    //     echo '5 identical';
    // }

    // if ($num != 4) {
    //     echo 'not 4';
    // }

    // if ($num == 5) {
    //     echo '5 passed';
    // } elseif ($num == 6) {
    //     echo '6 passed';
    // } else {
    //     echo 'Did not pass';
    // }

    #NESTING IF

    // $num = 7;

    // if ($num > 4) {
    //     if($num < 10) {
    //         echo "$num passed";
    //     } else {
    //         echo 'something';
    // }
    // }

    /*

        LOGICAL OPERATORS

        and &&
        or  ||
        XOR only one should be true

    */

    // if ($num > 4 || $num < 10) {
    //     echo "$num passed";
    // }

        # SWITCH

$favColor = 'red';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;    
    default:
        echo 'Your favorite color is something else';
}





?>