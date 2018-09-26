<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;


class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Laraveldaily\Timezones\hocsinhcontroller');
        $this->loadViewsFrom(__DIR__.'/views', 'hocsinh');
    }
}
