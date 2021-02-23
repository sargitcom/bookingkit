<?php declare(strict_types=1);

namespace BookingKit;

use BookingKit\Weather\WeatherDriverInterface;

class Weather
{
    private WeatherDriverInterface $driver;

    public function __construct(WeatherDriverInterface $driver)
    {
        $this->driver = $driver;
    }

    public function getWeatherByLocation(string $weatherLocation)
    {
        return $this->driver->getWeather($weatherLocation);
    }
}
