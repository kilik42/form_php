<?php

$conn = mysqli_connect('localhost', 'root', '', 'messageapp');



//test connection
if(mysqli_connect_errno){
    echo 'DB Connection Error: '.mysqli_connect_error();
    
}