<?php

namespace PhilippSchurig\LaravelWeatherapi;

use GuzzleHttp\Client;
use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Exception\GuzzleException;

class Weather
{
    /**
     * @var string
     */
    private string $url = 'http://api.weatherapi.com/v1/';

    /**
     * @var Client
     */
    private Client $client;

    /**
     * Weather constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $address
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function get(string $address)
    {
        $options = http_build_query(array_merge($this->getOptions(), ['q' => $address]));

        return json_decode($this->client->get("{$this->url}forecast.json?{$options}")->getBody()->getContents());
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return [
            'key' => config('laravel-weatherapi.key'),
            'lang' => config('laravel-weatherapi.language')
        ];
    }


}
