<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
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



