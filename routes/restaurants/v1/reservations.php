<?php

use App\Http\Controllers\Api\Restaurant\V1\ReservationController;
use Illuminate\Support\Facades\Route;

Route::apiResource('reservations', ReservationController::class);
