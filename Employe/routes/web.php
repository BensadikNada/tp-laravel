<?php

use App\Http\Controllers\employeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/employe', employeController::class);
