<?php

namespace App\Providers;

use App\Models\Menu;
use App\Settings\SiteSetting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
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
        if (Schema::hasTable('menus') && View::exists('includes.topMenu')) {
            View::composer(['includes.topMenu', 'home'], function ($view) {
                $menus = Menu::withCount('items')->with('items')->get();
                $view->with('menus', $menus);
            });
        }
        if (Schema::hasTable('settings')) {
            $siteSetting = new SiteSetting();
            View::share('siteSetting', $siteSetting);
        }
    }
}
