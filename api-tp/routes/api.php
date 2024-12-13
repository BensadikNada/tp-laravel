<?php

use App\Http\Controllers\CategorieControllerAPI;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/produits',[ProduitController::class,'indexApi']);

// Route::get('/produits/{id}',[ProduitController::class,'produitDetailsApi']);

// Route::delete('/produits/{id}', [ProduitController::class,'supprimerProduitApi']);

Route::get('/listeProduits', [produitController::class, 'indexApi']);
Route::post('/ajouterProduit', [produitController::class, 'ajouterProduit']);
// Route::get('/produits/{id}', [produitController::class, 'produitDetailsApi']);
Route::delete('/produits/{id}', [produitController::class, 'supprimerProduitApi']);
Route::post('/modifierProduit/{id}', [produitController::class, 'modifierProduit']);

Route::get('/listeCategories', [CategorieControllerAPI::class, 'listeCategories']);
Route::delete('/categories/{id}', [categorieControllerAPI::class, 'supprimerCategorie']);
Route::post('/ajouterCategorie', [categorieControllerAPI::class, 'ajouterCategorie']);
Route::post('/modifierCategorie/{id}', [categorieControllerAPI::class, 'modifierCategorie']);
