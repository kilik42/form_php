<?php

$cookie_name = "username";
$cookie_val = "devuser";

setcookie($cookie_name, $cookie_val, time() + 3600);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cookies - PHP</title>
</head>
<body>
    <?php
    if(!isset ($_COOKIE[$cookie_name])){
        echo 'Cookie - ' .$cookie_name. 'is not set';
    } else {
        echo 'Cookie - ' .$cookie_name. 'is  set';
        echo'Cookie Value - ' .$cookie_val; 
    }
    
    
    ?>
    
</body>
</html>