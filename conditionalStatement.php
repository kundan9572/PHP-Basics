<?
#Conditional
// $num=52;
// if( $num == 52){
//     echo 'num is 52';
// }elseif( $num ==54){
//     echo 'num is 54'
// }
// else{
//     echo 'did not something different';
// }


    $num = 80;
    if($num > 60 AND $num < 90){
        echo 'A Grade ';
    }
    elseif($num >40 AND $num <=60){
        echo 'B Grade';
    }
    elseif($num >20 AND $num <=40){
        echo 'C Grade';
    }
    else{
        echo 'Fail';
    }


    $favcolor = 'red';
    switch($favcolor){
        case 'red':
            echo 'Your fav colour is red';
            break;
        case 'green':
            echo 'Your fav colour is green';
            break;
        case 'blue':
            echo 'Your fav colour is blue';
            break;
        case 'orange':
            echo 'Your fav colour is orange';
            break;
        default: 
            echo 'You have some other favourite color';
        break;
    }
?>