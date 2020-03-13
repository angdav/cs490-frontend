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
    return json_decode($output);
}

$url = "https://web.njit.edu/~co77/cs490/beta/upload_test.php";
$json = curl($url);

echo $json->status . $json->message;

curl_close($ch);
?>
