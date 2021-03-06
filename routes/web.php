<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\MesureController;
use App\Http\Controllers\PaiementController;



use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('gestion_client', ClientController::class);
Route::resource('gestion_modele', ModeleController::class);
Route::resource('gestion_mesure', MesureController::class);
Route::resource('gestion_paiement', PaiementController::class);




Route::get('supprimer_client/{id}', [ClientController::class, 'destroy']);
Route::get('supprimer_modele/{id}', [ModeleController::class, 'destroy']);
Route::get('supprimer_mesure/{id}', [MesureController::class, 'destroy']);
Route::get('supprimer_paiement/{id}', [PaiementController::class, 'destroy']);
