<?php

use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [AnnonceController::class, 'q1']);
// Route::get('/', [AnnonceController::class, 'q2']);
// Route::get('/', [AnnonceController::class, 'q3']);
// Route::get('/', [AnnonceController::class, 'q4']);
// Route::get('/', [AnnonceController::class, 'q5']);
Route::get('/', [AnnonceController::class, 'q8']);

