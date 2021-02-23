<?php declare(strict_types=1);

namespace BookingKit\Weather;

interface WeatherDriverInterface
{
    public function getWeather(string $location);
}
