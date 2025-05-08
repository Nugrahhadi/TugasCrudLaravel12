<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatuanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('satuans', SatuanController::class);
