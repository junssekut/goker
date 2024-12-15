<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CareerDetailPage;

Route::get('/career-detail/{id}', CareerDetailPage::class)->name('career-detail');

Route::view('/', 'home')->name('home');
Route::view('/carrer', 'carrer')->name('carrer');
Route::view('/dev', 'login')->name('dev');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/auth.php';

