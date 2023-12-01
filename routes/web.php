<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detailBerita', [DashboardController::class, 'getDetail'])->name('detailBerita');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::prefix('kegiatan')->group(function () {
    Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::get('/detail', [KegiatanController::class, 'getDetail'])->name('detailKegiatan');
});

Route::prefix('kepengurusan')->group(function () {
    Route::get('/', [KepengurusanController::class, 'index'])->name('kepengurusan');
    Route::get('/detail', [KepengurusanController::class, 'getDetail'])->name('detailkepengurusan');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
    Route::get('/logout', [AuthController::class,'getLogout'])->name("logout");
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    });
});




