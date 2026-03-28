<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    else {
        return redirect()->route('login');
    }
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::post('/api/login', [AuthApiController::class, 'login']);
Route::get('/dashboard', [PagesController::class, 'index'])->middleware('auth')->name('dashboard');