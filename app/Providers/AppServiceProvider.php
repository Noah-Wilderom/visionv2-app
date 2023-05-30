<?php

use Visionv2\Providers\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->container()->add(\App\Services\TestService::class);
    }

    public function boot()
    {
        //
    }
}
