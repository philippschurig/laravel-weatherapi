<?php

namespace PhilippSchurig\LaravelWeatherapi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WeatherApi
{
    /**
     * @var string
     */
    private $url = 'http://api.weatherapi.com/v1/';

    /**
     * @var Client
     */
    private $client;

    /**
     * Weather constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getCurrentJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}current.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getCurrentXml(array $options)
    {
        return $this->client->get(
            "{$this->url}current.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getForecastJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}forecast.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getForecastXml(array $options)
    {
        return $this->client->get(
            "{$this->url}forecast.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getSearchJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}search.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getSearchXml(array $options)
    {
        return $this->client->get(
            "{$this->url}search.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getHistoryJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}history.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getHistoryXml(array $options)
    {
        return $this->client->get(
            "{$this->url}history.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getTimezoneJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}timezone.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getTimezoneXml(array $options)
    {
        return $this->client->get(
            "{$this->url}timezone.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getSportsJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}sports.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getSportsXml(array $options)
    {
        return $this->client->get(
            "{$this->url}sports.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getAstronomyJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}astronomy.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getAstronomyXml(array $options)
    {
        return $this->client->get(
            "{$this->url}astronomy.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * @param array $options
     * @return mixed
     *
     * @throws GuzzleException
     */
    public function getIpJson(array $options)
    {
        return json_decode(
            $this->client->get(
                "{$this->url}ip.json?{$this->getOptions($options)}"
            )->getBody()->getContents());
    }

    /**
     * @param array $options
     * @return string
     *
     * @throws GuzzleException
     */
    public function getIpXml(array $options)
    {
        return $this->client->get(
            "{$this->url}ip.xml?{$this->getOptions($options)}"
        )->getBody()->getContents();
    }

    /**
     * Get all options for request.
     *
     * @param array $userOptions
     * @return mixed
     */
    protected function getOptions(array $userOptions): array
    {
        $options = [
            'key' => config('laravel-weatherapi.key'),
            'lang' => config('laravel-weatherapi.language'),
        ];

        return http_build_query(array_merge($options, $userOptions));
    }
}
