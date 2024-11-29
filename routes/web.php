<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/home', function () {
    return view('home');
})->name('home');
