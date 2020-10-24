<?php

    $output = strpos('HelloWorld', 'o');
    echo $output;

    $output = strpos('Hello World', 'o');
    echo $output;

    $text = 'Hello World';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);

    $output1 = strtoupper('Hello World');
    echo $output1;

    $output1 = strtolower('Hello World');
    echo $output1;

    $output1 = ucwords('Hello World');
    echo $output1;

    $text = 'Hello World';
    $output1 = str_replace('World', 'everyone', $text);
    echo $output1;

    

?>