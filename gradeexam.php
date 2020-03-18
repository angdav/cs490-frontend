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

$url = "https://web.njit.edu/~co77/cs490/beta/????.php"; // TODO, change to what link camilo wants; THIS WILL SEND THE EXAM NAME, AND RETURN ALL TAKEN EXAMS, SO THAT IT CAN BE GRADED AND SUBMITTED
$json = curl($url);

echo $json;

curl_close($ch);
?>
