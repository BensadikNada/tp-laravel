<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::middleware("guest")->group(function(){
    Route::get("/register", [InscriptionController::class, "show"]);
    Route::post("/register", [InscriptionController::class, "register"])->name("register");
    Route::get("/login", [ConnexionController::class, "show"]);
    Route::post("/login", [ConnexionController::class, "login"])->name("login");

});

    
// Route::get('comptes', function() {
//     // Réservé aux utilisateurs authentifiés
//     })->middleware('auth');
    
