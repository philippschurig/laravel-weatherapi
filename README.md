# Laravel WeatherApi

This package is a simple integration for [Weather Api](https://www.weatherapi.com) in Laravel.

## Installation

You can install this the package via composer:

```
composer require philippschurig/laravel-weatherapi
```

Add the <code>WEATHER_API_KEY</code> environment variable to your .env file and fill it with your own API key.

You can also publish the config file to change the implementations. Here you can change the default language.

```
php artisan vendor:publish --provider="PhilippSchurig\LaravelWeatherapi\WeatherApiServiceProvider" --tag=config
```   

## Usage


```
use PhilippSchurig\LaravelWeatherapi;

$weather = new WeatherApi();

// Get current weather by city name
$currentWeather = $weather->getCurrentJson(['q' => 'Berlin']);

// Get forecast weather with 3 days by post code
$forecastWeather = $weather->getForecastJson(['q' => '10115']);
```

Or you can use the WeatherApi Facade.

## Language

The default language is english. To change the language add the <code>lang</code> tag to options array.

```
$weather = new WeatherApi();

$currentWeather = $weather->getCurrentJson(['q' => 'Berlin', 'lang' => 'de']);
```

## Requests and Parameters

For all available requests and parameters visit the [Weather Api](https://www.weatherapi.com/docs/) documentation.

## License

The Laravel WeatherApi package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT) 
