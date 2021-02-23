<?php declare(strict_types=1);

use BookingKit\Weather\Driver\WeatherCurlDriver;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{
    public function testGet(): void
    {
        $apiKey = 'c0f764ce5e4c25576b8d6325fc223810';

        $curlWeatherDriver = new \BookingKit\Weather\Driver\WeatherCurlDriver($apiKey);
        $weather = new \BookingKit\Weather($curlWeatherDriver);
        $weatherForecast = $weather->getWeatherByLocation("London");

        $this->assertNotEmpty($weatherForecast);
    }
}