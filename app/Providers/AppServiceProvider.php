<?php

namespace App\Providers;

use App\Utils\Validators;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
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
        if(in_array(config('app.env'), ['producao', 'homologacao']) && !env('APP_DEBUG', false)) {
            \URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
