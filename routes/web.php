<?php

use App\Http\Controllers\HomeController;
use \Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('menu/{slug?}', [HomeController::class, 'menu']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('contact', [HomeController::class, 'contact']);

/*Route::get('excel', function () {
    return \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\ItemImport, public_path('menus/beverages-beer.csv'));
});*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
