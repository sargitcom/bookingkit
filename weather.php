<?php declare(strict_types=1);

require_once(__DIR__ . '/vendor/autoload.php');

$location = $argv[1];

$apiKey = 'c0f764ce5e4c25576b8d6325fc223810';

$curlWeatherDriver = new \BookingKit\Weather\Driver\WeatherCurlDriver($apiKey);
$weather = new \BookingKit\Weather($curlWeatherDriver);
$weatherForecast = $weather->getWeatherByLocation($location);
echo $weatherForecast . "\n";