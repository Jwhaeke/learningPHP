<?php

    #   substr() returns portion of a string

    // $output = substr('Hello',1, 3); #Gives ell
    // $output = substr('Hello', -2); #gives lo
    // echo $output;

    #   strlen() Returns the length of a string

    // $output = strlen('Hello there!');
    // echo $output;

    #   strpos() Find the position of the first occurence of a sub string

    // $output = strpos('Hello World', 'o');
    // echo $output;

    #   strrpos() Find the position of the last occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    #   trim() Strips whitespace

    // $text = 'Hello World                ';
    // var_dump($text);
    // $trimmed = trim($text);
    // var_dump($trimmed);

    #   strtoupper Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    #   strtolower Makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    #   ucwords() Capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    #   str_replace() Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    #   is_string() Check if it is a string

    // $val = 'Hello';
    // $output = is_string($val);
    // // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    // foreach ($values as $value) {
    //     if(is_string($value)){
    //         echo "{$value} is a string<br>";
    //     }
    // }

    #   gzcompress() Compress a string

    $string = 
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Molestiae amet consectetur fuga reprehenderit itaque hic ipsum illo. 
    Provident labore quos facilis nihil, magni, obcaecati fugit nemo earum 
    dignissimos quis praesentium cum eaque ullam. Rerum quas, vero minima 
    officia mollitia quibusdam debitis reiciendis, expedita, corporis 
    laudantium sed necessitatibus voluptatibus dolores commodi?";

    $compressed = gzcompress($string);
    // echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;

?>