<?php
    //for loop
    for($i=0 ; $i<10 ; $i++){
        echo $i;
        echo '<br>';
    }

    //while loop
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++
    }

    //do-while loop

    $i=0;
    do{
        echo $i;
        echo '<br>';
        $i++
    }while($i < 10);

    //foreach

    $people = array('Khushbu','kundan','manoj','kevin');
    foreach($people as $person){
        echo $person;
        echo '<br>';
    }


    $people = array('Khushbu' => 91,'kundan' => 93,'manoj' => 92,'kevin' => 90);
    foreach($people as $person => $srn){
        echo $person. ': '. $srn ;
        echo '<br>';
    }

?>