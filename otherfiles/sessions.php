<?php

  //start session
  
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
       $_SESSION['username']='devuser';
       $_SESSION['email'] ='devuser@gmail.com';
       
       echo 'Session vars set';
       
    ?>
    
</body>
</html>