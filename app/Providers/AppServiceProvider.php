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
            $provider = Socialite::buildProvider('Tequilarapido\Okta\OktaProvider', $config);
            $provider->setOktaUrl($config['url']);
            return $provider;
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
