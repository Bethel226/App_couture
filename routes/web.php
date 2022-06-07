<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


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
    return view('layouts.main');
});

// Route::get('formulaire_client', function () {
//     return view('client');
// });

// Route::get('liste_client', function () {
//     return view('liste_client');
// });

Route::resource('gestion_couture', ClientController::class);

Route::get('supprimer_couture/{id}', [ClientController::class, 'destroy']);
