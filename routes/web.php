<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;


Route::view('/', 'welcome');

Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');
Route::get('test', [test::class, 'test']);

Route::get('/clients', 'ClientsController@list');
