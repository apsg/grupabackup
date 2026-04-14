<?php

use App\Http\Controllers\EmailController;
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
    return view('quotation')->with(['isContactHidden' => true]);
});

Route::get('/rodo', function () {
    return view('rodo');
});

Route::post('/email', [EmailController::class, 'send'])->name('email.send');
Route::post('/quotation', [EmailController::class, 'quotation'])->name('email.quotation');
