<?php

use App\Http\Controllers\ClinicClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClinicClientController::class, 'create'])->name('home');
Route::post('/', [ClinicClientController::class, 'store'])->name('store');
