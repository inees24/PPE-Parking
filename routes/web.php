<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');

Route::get('/clients', 'ClientsController@list');