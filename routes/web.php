<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\about;
use App\Http\Controllers\contact;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [home::class, 'index']);

Route::get('/about', [about::class, 'index']);

Route::get('/contact', [contact::class, 'index']);

Route::get('/portofolio', function () {
    return view('portofolio');
});