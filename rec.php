<?php

$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

echo "username: " .  $user . "<br>";
echo "password: " .  $pass . "<br>";

$hash = sha1($pass);

echo "hashed password: " . $hash;

function curl($url) {

    global $user;
    global $hash;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "u=".$user."&p=".$hash);
    $output = curl_exec($ch);
    return json_decode($output);
}

$url = "https://web.njit.edu/~co77/cs490/alpha/index.php";
$json = curl($url);
echo "<br>output: " . $json->status . $json->message;

curl_close($ch);



?>
