<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Response::macro('success', function ($data, $message = 'Fetched data', $httpCode = 200) {
            return Response::json([
                "message" => $message,
                "data" => $data
            ], $httpCode);
        });

        Response::macro('fail', function ($message = 'An unexpected error has occurred. Please contact customer support', $errors = [], $httpCode = 400) {
            return Response::json([
                "message" => $message,
                "errors" => $errors
            ], $httpCode);
        });
    }
}
