<?php

$user = $_POST["u"];
$pass = $_POST["p"];

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

$url = "https://web.njit.edu/~mba27/cs490/connect.php";
$json = curl($url);
$db = json_decode($json->db);

if ($json->status == 200 && $db->account_type == "1"){
    echo "Successful Professor Login! Redirecting...";
} else if ($json->status == 200 && $db->account_type == "0"){
    echo "Successful Student Login! Redirecting...";
}

curl_close($ch);
?>
