<?php

session_start();
$usr = $_POST['usr'];

if ($usr != 0){
    $_SESSION['usr'] = $usr;
}


?>