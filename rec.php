<?php

$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

echo "username: " .  $user . "<br>";
echo "password: " .  $pass . "<br>";

$hash = sha1($pass);

echo "hashed password: " . $hash;

$ch = curl_init();
$url = "https://web.njit.edu/~co77/cs490/alpha/index.php";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "u=".$user."&p=".$hash);

$output = curl_exec($ch);

echo "<br>output: " . $output;

curl_close($ch);



?>
