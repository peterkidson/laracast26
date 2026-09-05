<?php

use Illuminate\Support\Facades\Route;

Route::view('/',        'welcome');
Route::view('/about',   'about');
Route::view('/contacts','contacts');

