<?php

// hello world

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
