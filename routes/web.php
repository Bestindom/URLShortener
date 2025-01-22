<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('api/user', UserController::class);
Route::apiResource('api/type', TypeController::class);