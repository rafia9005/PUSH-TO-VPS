<?php

use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KeluhanMasyarakatController;


// controllers auth
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/get-speed', [DashboardController::class, 'getSpeed'])->name('get-speed');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'profileEdit']);
    Route::put('/profile/update/name', [EditProfileController::class, 'updateName'])->name('profile.update.name');
    Route::put('/profile/update/email', [EditProfileController::class, 'updateEmail'])->name('profile.update.email');
    Route::put('/profile/update/password', [EditProfileController::class, 'updatePassword'])->name('profile.update.password');
    Route::get('/dashboard/keluhan-masyarakat', [KeluhanMasyarakatController::class, 'index'])->name('keluhan-masyarakat');
    Route::post('/dashboard/keluhan-masyarakat/submit', [KeluhanMasyarakatController::class, 'kirimKeluhan'])->name('kirim.keluhan');
    
    Route::middleware(['admin'])->group(function () {
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('/dashboard/berita', [BeritaController::class, 'index']);
        Route::post('/berita/create', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/dashboard/berita/data', [BeritaController::class, 'dataBerita'])->name('berita-data');
        Route::delete('/berita/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
        Route::get('/dashboard/keluhan-masyarakat/data', [KeluhanMasyarakatController::class, 'showDataKeluhan'])->name('data.keluhan');
        Route::get('/dashboard/keluhan-masyarakat/done/{id}', [KeluhanMasyarakatController::class, 'terimaKeluhan'])->name('terima.keluhan');
    });    
});
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');


Route::get('/', [HomeController::class, 'index']);
