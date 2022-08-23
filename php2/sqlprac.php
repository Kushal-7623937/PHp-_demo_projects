<?php

 $host  = $_SERVER['HTTP_HOST'];  
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');  
    $newpage = 'res.php';  


    header('Location: https//$host $uri/$newpage');
?>