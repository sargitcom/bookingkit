<?php declare(strict_types=1);

namespace BookingKit\Weather\Driver;

use BookingKit\Weather\WeatherDriverInterface;

abstract class AbstractDriver implements WeatherDriverInterface
{
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
