<?php

namespace Lijiananha\Logistics;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('Logistics', function ($app) {
            return new Logistics();
        });
    }
}
