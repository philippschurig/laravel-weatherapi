<?php

namespace PhilippSchurig\LaravelWeatherapi\Support;

use Illuminate\Support\Facades\Facade;

class WeatherApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'weatherapi'; }
}
