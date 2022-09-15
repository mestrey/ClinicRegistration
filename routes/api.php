<?php

use App\Http\Controllers\ClinicApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('clinics', [ClinicApiController::class, 'store'])->name('apistore');
