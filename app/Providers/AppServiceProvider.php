<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
use App\Settings\SiteSetting;
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
        if (Schema::hasTable('settings')) {
            $siteSetting = new SiteSetting();
            \Illuminate\Support\Facades\View::share('siteSetting', $siteSetting);
        }
    }
}
