<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\AllController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return ' ';
// });

// Route::get('/login', function () {
//     return 'Page de connexion';
// });

// Route::get('/page/{n}', function ($n) {
//     return 'je suis la page ' . $n.'!';
// });

// Route::get('contact', function () {
//     return "C'est moi le contact.";
// });

// Route::get('/profile', function () {
//     return view('profile.form');
// });

// Route pour traiter le formulaire
// Route::post('/profile', function (Request $request) {
//     $nom = $request->input('key', 'default');
//     $email = $request->input('email');

//     return "Nom : $nom <br> Email : $email";
// })->name('profile');

Route::resource('/Test', TestController::class);
