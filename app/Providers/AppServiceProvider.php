<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\vacancy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();


        View::composer('*', function ($view){

            $view->with('menu', Menu::all()) ;


        });
    }
}
