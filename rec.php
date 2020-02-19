<?php

$user = $_REQUEST["u"];
$pass = $_REQUEST["p"];

$hash = sha1($pass);

echo "<br><br>";
echo "<table id='info'>";
echo "<caption>INPUT</caption>";
echo "<tr><td>username</td><td>$user</td></tr>";
echo "<tr><td>password</td><td>$pass</td></tr>";
echo "<tr><td>hashed password</td><td>$hash</td></tr>";
echo "</table>";

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

echo "<br><br>";
echo "<table id='info'>";
echo "<caption>OUTPUT</caption>";
echo "<tr><td>status</td><td>$json->status</td></tr>";
echo "<tr><td>message</td><td>$json->message</td></tr>";
echo "</table>";

curl_close($ch);
?>
