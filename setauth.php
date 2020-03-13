<?php

session_start();
$usr = $_POST['usr'];
$username = $_POST['username'];

if ($usr != 0){
    $_SESSION['usr'] = $usr;
    $_SESSION['username'] = $username;
}


?>