<?php
$access_token = 'FG8vOTKY9L+F2IsYjOF2/ZJziHRALbcaqmHZ8ZexP0+IvJpW03L4E+OQ3afE8chL2zEPqLg0tJ7czXeYZE7H+Z78Yh9M2x3vmeo/tpGcMbv5kes5R2KxIFJs+l+vNMjzXobKjwjldiMwos6SHz1kQwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
