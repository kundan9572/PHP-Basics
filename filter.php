<?php

    //check the posted data
    if(filter_has_var(INPUT_POST,'data')){
        echo 'Data Found';
    }else{
        echo 'No Data';
    }

    if(filter_has_var(INPUT_POST,'data')){
        $email = $_POST['data'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else{
            echo 'Invalid Email';
        }
    }

?>

<form action="<?php echo $_SERVER['PHP_SELF']"; ?>" method="post">
        <input type="text" name='data'>
        <button type='submit'>Submit</button>
</form>