<?php
session_start();

$required = $_POST['required'];

if ($_SESSION['usr'] != $required){
    echo "0";
} else {
    echo "1";
}
?>