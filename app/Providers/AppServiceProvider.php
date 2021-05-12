<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        if (Schema::hasTable('menus') && \Illuminate\Support\Facades\View::exists('includes.topMenu')) {
            \Illuminate\Support\Facades\View::composer('*', function ($view) {
                $view->with('menus', Menu::all());
            });
        }
    }
}
