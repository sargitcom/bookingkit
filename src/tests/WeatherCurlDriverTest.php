<?php declare(strict_types=1);

use BookingKit\Weather\Driver\WeatherCurlDriver;
use PHPUnit\Framework\TestCase;

class WeatherCurlDriverTest extends TestCase
{
    public function testGet(): void
    {
        $apiKey = 'c0f764ce5e4c25576b8d6325fc223810';

        $driver = new WeatherCurlDriver($apiKey);

        $weatherForecast = $driver->getWeather("London");

        $this->assertNotEmpty($weatherForecast);
    }
}