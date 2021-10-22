<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Excel;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu/{slug?}', [HomeController::class, 'menu']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/import', function (Excel $excel) {
    $filePath = public_path('data.xlsx');
//    return $filePath;
    $excel->import(new \App\Imports\DataImport('Items'), $filePath);
    return 'yes';
});

Auth::routes();
