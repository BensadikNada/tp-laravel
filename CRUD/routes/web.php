<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\eloquentController;
use App\Http\Controllers\IntervenantController;
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

// Route::get('/spline', function () {
//     return view('welcome');
// });


Route::get('/intervenants', [IntervenantController::class, 'index'])->name('intervenants.listIntervenant');
Route::get('/intervenants/create', [IntervenantController::class, 'create'])->name('intervenants.create');
Route::post('/intervenants', [IntervenantController::class, 'store'])->name('intervenants.store');
Route::get('/intervenants/{id}', [IntervenantController::class, 'show'])->name('intervenants.show');
Route::get('/intervenants/{id}/edit', [IntervenantController::class, 'edit'])->name('intervenants.edit');
Route::put('/intervenants/{id}', [IntervenantController::class, 'update'])->name('intervenants.update');
Route::delete('/intervenants/{id}', [IntervenantController::class, 'destroy'])->name('intervenants.destroy');

Route::get('certifications', [CertificationController::class, 'index'])->name('certifications.index');
Route::get('certifications/create', [CertificationController::class, 'create'])->name('certifications.create');
Route::post('certifications', [CertificationController::class, 'store'])->name('certifications.store');
Route::get('certifications/{id}', [CertificationController::class, 'show'])->name('certifications.show');
Route::get('certifications/{id}/edit', [CertificationController::class, 'edit'])->name('certifications.edit');
Route::put('certifications/{id}', [CertificationController::class, 'update'])->name('certifications.update');
Route::delete('certifications/{id}', [CertificationController::class, 'destroy'])->name('certifications.destroy');
