<?php
$apiKey = "4dcbcc7875880401cdfd908ebd8ee83a";
$cityId = "765876";

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=". $cityId . "&lang=en&units=metric&APPID=". $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time() + $data->timezone; 
?>
<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>
<body>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l H:i", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
        </div>
    </div>
    <?php

$apiKey = "4dcbcc7875880401cdfd908ebd8ee83a";

$cityId = "5128638";

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=". $cityId . "&lang=en&units=metric&APPID=". $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time()+$data->timezone; 
?>
<div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l H:i ", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
        </div>
    </div>
    <?php

$apiKey = "4dcbcc7875880401cdfd908ebd8ee83a";

$cityId = "6619279";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=". $cityId . "&lang=en&units=metric&APPID=". $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time()+ $data->timezone; 
?>
<div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l H:i", $currentTime); ?></div>
            <div><?php  echo date("jS F, Y",$currentTime); ?></div>
        </div>
    </div>
</body>
</html>
