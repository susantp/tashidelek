<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Excel;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu/{slug?}', [HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/import', function (Excel $excel) {
    $filePath = public_path('data.xlsx');
//    return $filePath;
    $excel->import(new \App\Imports\DataImport('Items'), $filePath);
    return 'yes';
});
Route::get('mail', function () {
    Mail::raw('Text to e-mail', function ($message) {
        $message->to('gracysusant@gmail.com');
    });
});
Auth::routes();
