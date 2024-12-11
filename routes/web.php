<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LoginHrdForm;
use Livewire\Volt\Volt;


Route::view('/', 'home')->name('home');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::view('/dev', 'login')->name('dev');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/auth.php';