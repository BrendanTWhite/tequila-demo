<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Socialite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Socialite::extend('okta', function ($app) {
            $config = $app['config']['services.okta'];
            return Socialite::buildProvider('Tequilarapido\Okta\OktaProvider', $config);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
