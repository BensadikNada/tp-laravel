<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\LoginWare;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware(LoginWare::class);
Route::post('/login', [LoginController::class, 'create'])->name('login.submit');
Route::get('/reveal', [LoginController::class, 'reveal'])->name('reveal')->middleware(LoginWare::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
