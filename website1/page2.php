<?php
    // set the cookie
    setcookie('username' , 'Kundan', time()+(86400*30))

    //delete the cookie
    setcookie('username' , 'Kundan', time() - 3600);

    if(count($_COOKIE) > 0){
        echo 'There are'. count($_COOKIE). 'cookies saved <br>';
    }else {
        echo 'There are no cookie saved';
    }


    if(isset($_COOKIE['username'])){
        echo 'USer'. $_COOKIE['username']. 'is set <br>';
    }else{
        echo 'User is not set';
    }

?>