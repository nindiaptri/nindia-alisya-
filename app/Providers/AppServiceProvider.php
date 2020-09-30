<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\serviceprovider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength("75");
    } 

    /** 
     * Register any application servces.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
