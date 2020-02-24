<?php

$user = $_POST["u"];
$pass = $_POST["p"];

echo "<br><br>";
echo "<table id='info'>";
echo "<caption>INPUT</caption>";
echo "<tr><td>username</td><td>$user</td></tr>";
echo "<tr><td>password</td><td>".strlen($pass)." characters</td></tr>";
echo "</table>";

function curl($url) {

    global $user;
    global $pass;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "u=".$user."&p=".$pass);
    $output = curl_exec($ch);
    return json_decode($output);
}

$url = "https://web.njit.edu/~mba27/cs490/stuff.php";
$json = curl($url);

echo "<br><br>";
echo "<table id='info'>";
echo "<caption>OUTPUT</caption>";
echo "<tr><td>status</td><td>$json->status</td></tr>";
echo "<tr><td>db result</td><td>$json->db</td></tr>";
echo "<tr><td>njit result</td><td>$json->njit</td></tr>";
echo "</table>";

curl_close($ch);
?>
