<?php

use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClinicController::class, 'create'])->name('home');
Route::post('/', [ClinicController::class, 'store'])->name('store');
