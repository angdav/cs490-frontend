<?php

$req = $_POST["req"];

function curl($url) {

    global $req;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "req=".$req);
    $output = curl_exec($ch);
    return $output;
}

$url = "https://web.njit.edu/~mba27/cs490/relay.php"; // TODO, change to what link camilo wants; THIS WILL SEND THE EXAM NAME, AND RETURN ALL QUESTIONS IN THE EXAM, SO THAT IT CAN BE SUBMITTED
$json = curl($url);

echo $json;

curl_close($ch);
?>
