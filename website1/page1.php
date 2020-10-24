<?php

    if(isset($_POST['submit'])){

        $username = htmlentities($_POST['name']);

        setcookie('username', $username,time()+3600) // store for 1 hour

         header('Location: page2.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
    <input type="text" name="name" placeholder="Enter Name"><br>
    <input type="submit" name="submit" value="Submit"><br>

    </form>

  

</body>
</html>