<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('home', [\App\Http\Controllers\Admin\PageController::class, "home"])->name('home');

    Route::resource('menu', \App\Http\Controllers\Admin\MenuController::class);
    Route::patch('changeMenuStatus', [\App\Http\Controllers\Admin\MenuController::class, 'toggleStatus'])->name('changeMenuStatus');

    Route::resource('item', \App\Http\Controllers\Admin\ItemController::class);

    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('setting');
    Route::post('setting/save', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('setting.save');


});

