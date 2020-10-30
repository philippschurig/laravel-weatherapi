<?php

namespace PhilippSchurig\LaravelWeatherapi;

use Illuminate\Support\ServiceProvider;

class WeatherapiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-weatherapi.php'),
        ]);
    }
}
