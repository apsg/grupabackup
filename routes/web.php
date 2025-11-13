<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ubezpieczenia', function () {
    return view('insurance');
});

Route::get('/kariera', function () {
    return view('career');
});

Route::get('/zapytanie', function () {
    return view('quotation');
});

