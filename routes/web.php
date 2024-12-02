<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/home', function () {
    return view('home');
})->name('home');
