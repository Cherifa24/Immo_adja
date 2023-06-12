<?php

use Illuminate\Support\Facades\Route;
use App\Models\Acquereur;
use App\Http\Controllers\AcquereurController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\BienController;

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

Route::get('/', function () {
    return "hello";
});
/*
Route::get('/gestion', function () {
    $acq = new Acquereur();
    $acq->nom = "ogbone";
    $acq->prenom = "fay";
    $acq->contact = "454545";
    $acq->email = "fay@gmail.com";
    $acq->password = "148632";
    $acq->adresse = "lome";
    //$acq->save();
});*/
/*
Route::resources([
    "acquereurs" => AcquereurController::class,
]);*/
//***********acquereur */
Route::get('acquereur/list',[AcquereurController::class, 'index'])->name('acquereur.index');
Route::get('acquereur/formulaire/creation',[AcquereurController::class, 'create'])->name('acquereur.create');
Route::get('acquereur/formulaire/edition/{acquereur}',[AcquereurController::class, 'edit'])->name('acquereur.edit');
Route::post('acquereur/enregistrement',[AcquereurController::class, 'store'])->name('acquereur.store');
Route::get('acquereur/{acquereur}', [AcquereurController::class, 'show'])->name('acquereur.show');
Route::put('acquereur/mis_a_jour/{acquereur}', [AcquereurController::class, 'update'])->name('acquereur.update');
Route::delete('acquereur/{acquereur}', [AcquereurController::class, 'destroy'])->name('acquereur.delete');
//agence
Route::get('agence/list',[AgenceController::class, 'index'])->name('agence.index');
Route::get('agence/formulaire/creation',[AgenceController::class, 'create'])->name('agence.create');
Route::get('agence/formulaire/edition/{agence}',[agenceController::class, 'edit'])->name('agence.edit');
Route::post('agence/enregistrement',[AgenceController::class, 'store'])->name('agence.store');
Route::get('agence/{agence}', [AgenceController::class, 'show'])->name('agence.show');
Route::put('agence/mis_a_jour/{agence}', [agenceController::class, 'update'])->name('agence.update');
Route::delete('agence/{agence}', [AgenceController::class, 'destroy'])->name('agence.delete');
//biens

Route::get('bien/list',[BienController::class, 'index'])->name('bien.index');
Route::get('bien/formulaire/creation',[BienController::class, 'create'])->name('bien.create');
Route::get('bien/formulaire/edition/{bien}',[BienController::class, 'edit'])->name('bien.edit');
Route::post('bien/enregistrement',[BienController::class, 'store'])->name('bien.store');
Route::get('bien/{bien}', [BienController::class, 'show'])->name('bien.show');
Route::put('bien/mis_a_jour/{bien}', [BienController::class, 'update'])->name('bien.update');
Route::delete('bien/{bien}', [BienController::class, 'destroy'])->name('bien.delete');