<?php

use App\Http\Controllers\Admin\ItemController;
use Illuminate\Support\Facades\Route;

Route::resource('items', ItemController::class);
