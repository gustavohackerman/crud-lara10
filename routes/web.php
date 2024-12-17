<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

//Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant.liste');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/ajouter', [EtudiantController::class, 'ajout_etudiant'])->name('etudiant.ajouter');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/', [HomeController::class, 'login'])->name('login');
