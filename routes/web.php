<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\ConnexionController;


//Route::view('/', 'welcome');

Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');
Route::view('acceuil', 'acceuil');
Route::get('test', [test::class, 'test']);

// Route::get('/connexion', 'ConnexionController@formulaire');
// Route::post('/connexion', 'ConnexionController@traitement');
Route::get('/clients', 'ClientsController@list');
Route::get('/', [ConnexionController::class, 'formulaire']);
