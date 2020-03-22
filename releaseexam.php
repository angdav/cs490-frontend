<?php

$req = $_POST["req"];

function curl($url) {

    global $req;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "req=".$req); // this has to somehow send both the prof name and exam name
    $output = curl_exec($ch);
    return $output;
}

$url = "https://web.njit.edu/~mba27/cs490/relay.php"; // TODO, change to what link camilo wants; THIS WILL SEND THE PROF NAME, EXAM NAME, AND MAKE THAT EXAM RELEASED
$json = curl($url);

echo $json;

curl_close($ch);
?>
