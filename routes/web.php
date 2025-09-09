<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layout');
});

Route::get('/jajan', function () {
    return view('user/jajan');
});

Route::get('/lumoods', function () {
    return view('user/lumoods');
});


Route::get('/galeri', function () {
    return view('user/galeri');
});

Route::get('/tim', function () {
    return view('user/tim');
});

Route::get('/admin', function () {
    return view('admin/beranda');
});

Route::get('/admin', function () {
    return view('admin/beranda');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
