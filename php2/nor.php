<?php  

include "ops.php";

$_SESSION = [];
session_unset();
session_destroy();
header('Location:recrea.php');
?>

