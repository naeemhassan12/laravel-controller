<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [UserController::class, 'showCase']);
Route::get('/contact', [UserController::class, 'userCase']);
