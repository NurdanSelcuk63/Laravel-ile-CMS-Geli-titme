<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\AuthApiController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    else {
        return redirect()->route('login');
    }
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/api/login', [AuthApiController::class, 'login']);
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');