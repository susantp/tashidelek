<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PractiseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu/{slug?}', [HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('practise', function () {

    $ops = ["5", "2", "C", "D", "+"];
    $solution = new PractiseController();
    $output = $solution->calPoints($ops);
//    end($ops);
//    prev($ops);
//    $z = prev($ops);
//    $key = end($ops);

    return $output;

});
Auth::routes();
