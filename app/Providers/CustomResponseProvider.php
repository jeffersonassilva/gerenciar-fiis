<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

/**
 * Class CustomResponseProvider
 * @package App\Providers
 */
class CustomResponseProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('custom', function ($message = '', $data = '', $statusCode = 200) {
            return response([
                'message' => __($message),
                'data' => $data,
                'status' => $statusCode
            ], $statusCode);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
