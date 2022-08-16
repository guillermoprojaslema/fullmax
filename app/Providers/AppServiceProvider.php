<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\Socialnetwork;
use Illuminate\Support\Facades\View;
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
        $socialNetworks = Socialnetwork::all();
        $services       = Service::all();

        View::share([
            'socialNetworks' => $socialNetworks,
            'services' => $services,
        ]);
    }
}
