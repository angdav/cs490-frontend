<?php

function curl($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    return $output;
}

$url = "https://web.njit.edu/~co77/cs490/beta/get_all_questions.php";
$json = curl($url);

echo $json;

curl_close($ch);
?>
