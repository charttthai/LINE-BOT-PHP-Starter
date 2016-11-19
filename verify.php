<?php
$proxy = 'http://fixie:Tjzz5bgCINIoGQU@velodrome.usefixie.com:80';
$proxyauth = 'mr.chartthai@gmail.com:ScPun4031';

$access_token = 'aKlwrw02mFypTfcLUyqFQNPb5I6u15sugGqGIxi7+YVRfyiyiUHi0gLciPKMrSyXtrSr0ZmnK1wkk2Qh/DCbJOkWxzFWWwzgRjqpjd2GtUFeZLEQGJhx0tFbYpOohdQtSXrdIRR6qq5HqKP1wyOZ8QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
