<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Place;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.layout_client.header_client', function($view){
            $diadiem = Place::all();
            $view->with('diadiem', $diadiem);
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
