<?php

    $loggedIn = false;

    if($loggedIn){
        echo 'you are logged In';
    }
    else{
        echo 'you are not Logged In';
    }

    echo ($loggedIn) ? 'you are logged In' : 'you are not logged In';

?>