<?php
$access_token = '86oULPfA9ZlXMZ1BWgY4UUUU+DOFYRgCT6TuvSXPulaYjpeVArv0IeZwuV7IG9x5EqTrXVHPMgOXMBcWkKvNpwxHbxP0cCj4LvgjR0mBQL6kLIYXbkICan5oZ0I8iscMB7fBsiDqOvlOrp7FX6SFVwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;