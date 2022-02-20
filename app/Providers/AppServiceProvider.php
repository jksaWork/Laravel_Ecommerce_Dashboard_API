<?php

namespace App\Providers;

use App\Models\OrganizationProfile;
use Database\Seeders\OrganizationProfileSeeder;
// use Facade\FlareClient\View;

// use Facade\FlareClient\View;
// View
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator;
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


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::share('OrganizationProfile', OrganizationProfile::first() );
    }
}
