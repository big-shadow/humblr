<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Validator;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // This is necessary for cross-subdomain sessions.
        session_set_cookie_params(0, '/', '.' . env('APP_DOMAIN'));

        // This line prevents a migration error.
        // SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
        Schema::defaultStringLength(191);
        Resource::withoutWrapping();

        Validator::extend('alpha_space', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value);
        });

        Validator::extend('phone', function ($attribute, $value) {
            return preg_match('/^[\d\-\)\(\s]+$/u', $value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MailerInterface', 'App\MailgunWrapper');

        $this->app->bind('mailgun.client', function () {
            return GuzzleAdapter::createWithConfig([
                'timeout' => 10.0,
            ]);
        });
    }
}
