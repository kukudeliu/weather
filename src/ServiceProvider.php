<?php
/**
 * Created by PhpStorm.
 * User: LiuYi
 * Date: 2019/10/25
 * Time: 13:33
 */

namespace Kukudeliu\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}