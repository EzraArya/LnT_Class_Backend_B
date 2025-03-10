<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('product.index');
})->name('home')->middleware('auth');

Route::resource('/product', ProductController::class);

Route::get('/login', function() {
    return view('auth.login');
})->name('login');
Route::get('/register', function() {
    return view('auth.register');
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register-user');
Route::post('/login', [UserController::class, 'login'])->name('login-user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
