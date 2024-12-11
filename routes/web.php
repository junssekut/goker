<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use Livewire\Volt\Volt;

use App\Livewire\CareerDetailPage;

Route::get('career-detail', CareerDetailPage::class)->name('career-detail');

Route::view('/', 'home')->name('home');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::view('/dev', 'login')->name('dev');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


// Route::get('/preview-pdf/{filename}', function ($filename) {
//     $path = storage_path('app/public/temp_cv/' . $filename);

//     if (!file_exists($path)) {
//         abort(404);
//     }

//     return Response::make(file_get_contents($path), 200, [
//         'Content-Type' => 'application/pdf',
//         'Content-Disposition' => 'inline; filename="' . $filename . '"'
//     ]);
// })->name('preview.pdf');


require __DIR__.'/auth.php';

