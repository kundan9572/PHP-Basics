<?php

$people[] = "Kundan";
$people[] = "Rahul";
$people[] = "Satyam";
$people[] = "Nayan";
$people[] = "Ajay";
$people[] = "Avinash";
$people[] = "Mohan";

//getQuery string

$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestion

$q = strtolower('$q');
$len = strlen($q);
foreach($people as $person){
    if(stristr($q, substr($person,0,$len))){
        if($suggestion === ""){
            $suggestion = $person;
        }else{
            $suggestion .=", $person";
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;

?>