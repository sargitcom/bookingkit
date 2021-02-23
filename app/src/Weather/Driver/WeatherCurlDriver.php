<?php declare(strict_types=1);

namespace BookingKit\Weather\Driver;

use BookingKit\Weather\WeatherDriverInterface;

class WeatherCurlDriver extends AbstractDriver
{
    public function getWeather(string $location)
    {
        // url to api endpoint
        $weatherApiUrl = 'http://api.openweathermap.org/data/2.5/weather?units=metric&q=' . $location . '&appid=' . $this->apiKey;

        // perform curl call to api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $weatherApiUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $apiResult = json_decode(curl_exec($ch));
        curl_close($ch);

        // return weather as a string
        return $apiResult->weather[0]->description . ', ' . $apiResult->main->temp . ' degrees celcius';
    }
}
