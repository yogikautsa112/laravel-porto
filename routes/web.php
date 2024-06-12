<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('header');
});

Route::get('/about', [PortoController::class, 'indexAbout']) -> name('about');
Route::get('/contact', [PortoController::class, 'indexContact']) -> name('contact');
Route::get('/portofolio', [PortoController::class, 'indexPortofolio']) -> name('portofolio');