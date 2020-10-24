<?php

    function simpleFunction(){
        echo 'Hello World';
    }

    simpleFunction();

    //default value Fuction
    function sayHello($name = 'world'){
        echo "Hello $name <br>";
    }

    sayHello('Kundan');


    function addNumber($num1 , $num2){
        return $num1 + $num2;
    }



    $myNum = 10;

    $sum = addNumber(2,4);
    echo $sum;

    function addFive($num){
        $num +=5;
    }

    function addTen(&$num){
        $num +=10;
    }

    addFive($myNum)

    echo "Value: $myNum <br>";



    addTen($myNum)

    echo "Value: $myNum <br>";
?>