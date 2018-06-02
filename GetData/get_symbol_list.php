<?php

include 'connect_to_data_base.php';

$url = 'https://api.iextrading.com/1.0/ref-data/symbols';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);

$result = json_decode($data,true);


?>
