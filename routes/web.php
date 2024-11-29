<?php

use Illuminate\Support\Facades\Route;

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/home', function () {
    return view('home');
})->name('home');
