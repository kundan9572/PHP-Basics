<?php

    echo date('d');  // day
    echo date('m');  // month
    echo date('Y');  // Year
    echo date('l');   //Day of the week;
    
    echo date('Y/m/d');
    echo date('d/m/Y');

    echo date('h');
    echo date('i');
    echo date('s');
    echo date('a');

    $timestamp = mktime(10,14,54,9,10,1998);

    echo date('m/d/Y/ h:i:sa', $timestamp)
?>