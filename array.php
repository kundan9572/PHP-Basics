<?php

    $people = array('kevin','kundan','khushbu');
    $ids = array(90,91,93);
    $car = ['Honda','BMW','AUdi'];
    $car[3] = ['Ferrari'];

    echo $car;
    echo count($car);
    print_r($car);

    $people = array('Kevin' => 90, 'Khushbu' => 91 , 'Kundan' => 93);
    print_r($people);

    $cars = array(
        array('Honda',20,10),
        array('BMW',40,20),
        array('Maruti',40,60),
        array('Fords',50,30)  
    );

    echo $cars[0][1];


?>