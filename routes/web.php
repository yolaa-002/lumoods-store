<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layout');
});

Route::get('/menu', function () {
    return view('user/menu');
});


Route::get('/galeri', function () {
    return view('user/galeri');
});

Route::get('/tim', function () {
    return view('user/tim');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
