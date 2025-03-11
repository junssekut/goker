<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CareerPage;
use App\Livewire\CareerDetailPage;

Route::get('/career-detail/{careerId}', CareerDetailPage::class)->name('career-detail');
Route::get('/career', CareerPage::class)->name('career');

Route::view('/', 'home')->name('home');
Route::view('/dev', 'login')->name('dev');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

use App\Http\Controllers\CareerController; // Import your controller

Route::get('/careers/{record}/download-cv', [CareerController::class, 'downloadCv'])->name('career.downloadCv');
    
use App\Http\Controllers\Auth\LoginController;

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';
